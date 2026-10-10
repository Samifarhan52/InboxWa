/**
 * ==============================================================================
 * HELLOBOTZ MULTI-SHEET ROUTER & INTERNATIONAL PHONE HANDLER (Google Apps Script)
 * ==============================================================================
 * 
 * Automatically segregates and routes submissions into 3 distinct sheets:
 * 
 * - SHEET 1: "leads"     -> General Leads, Demo Bookings, Callbacks, Contact forms
 * - SHEET 2: "Partners"  -> Affiliate, Agency, White-Label & Technology Partners
 * - SHEET 3: "Careers"   -> Job Applications, Freshers, Internships & CVs
 * 
 * Universal International Phone Number Protection:
 *  - Supports numbers from all countries & formats (+43, +86, +1, +44, +91, 00..., etc.)
 *  - Prepending "'" forces Google Sheets / Excel to store values as pure Plain Text.
 *  - Completely eliminates "#ERROR!" formula parse errors caused by leading '+' and spaces.
 *  - Preserves country codes, spaces, dashes, parentheses, and leading zeros.
 *  - Includes 1-Click "Fix All Phone #ERROR! Cells" tool to repair existing rows!
 * ==============================================================================
 */

// ==============================================================================
// 1. CONFIGURATION: Set your notification email below (or leave blank "")
// ==============================================================================
var NOTIFICATION_EMAIL = ""; // e.g. "mail@hellobotz.com" or "your-email@gmail.com"

function doGet(e) {
  return ContentService.createTextOutput(JSON.stringify({
    ok: true,
    status: "active",
    service: "HelloBotz Google Sheet Webhook Router",
    timestamp: new Date().toISOString()
  })).setMimeType(ContentService.MimeType.JSON);
}

/**
 * Universal Phone Formatter for Google Sheets:
 * Prevents formula parsing errors (#ERROR!), preserves leading '+' sign,
 * preserves country code spaces and leading zeros.
 */
function formatPhoneForSheet(rawPhone) {
  if (rawPhone === undefined || rawPhone === null) return "";
  var str = String(rawPhone).trim();
  if (!str) return "";

  // Normalize whitespace (collapse tabs/newlines and multiple spaces)
  str = str.replace(/[\r\n\t]+/g, " ").replace(/\s+/g, " ").trim();

  // Strip any accidental leading formula '=' signs
  if (str.charAt(0) === "=") {
    str = str.substring(1).trim();
  }

  // Convert 00-prefix international dial code (e.g. 0044 -> +44)
  if (/^00[1-9]/.test(str)) {
    str = "+" + str.substring(2);
  }

  // If already starts with an apostrophe, return as is
  if (str.charAt(0) === "'") return str;

  // In Google Sheets, any value starting with '+' or '=' is evaluated as a formula.
  // When country codes contain spaces (e.g. "+43 665 67088186"), Sheets fails with #ERROR!.
  // Prepending "'" forces Google Sheets to treat the value as pure literal TEXT.
  // The apostrophe is invisible in the sheet, but protects '+', spaces, and leading zeros.
  return "'" + str;
}

function doPost(e) {
  var lock = LockService.getScriptLock();
  lock.tryLock(10000); // Wait up to 10 seconds to prevent concurrent write collisions

  try {
    if (!e || !e.postData || !e.postData.contents) {
      return ContentService.createTextOutput(JSON.stringify({
        ok: false,
        error: "No payload received."
      })).setMimeType(ContentService.MimeType.JSON);
    }

    var data = JSON.parse(e.postData.contents);
    var ss = SpreadsheetApp.getActiveSpreadsheet();

    var targetSheet = (data.target_sheet || "").toUpperCase();
    var category = (data.category || "").toLowerCase();
    var type = (data.type || "").toLowerCase();
    var sourcePage = (data.source_page || "").toLowerCase();

    // 1. STRICT PARTNER CHECK (Prioritized)
    var isPartners = (
      targetSheet === "SHEET2" ||
      targetSheet === "PARTNERS" ||
      category === "partners" ||
      type.indexOf("partner") !== -1 ||
      sourcePage.indexOf("/partners") !== -1 ||
      Boolean(data.partner_type)
    );

    // 2. STRICT CAREERS CHECK (Only if not a partner)
    var isCareers = !isPartners && (
      targetSheet === "SHEET3" ||
      targetSheet === "CAREERS" ||
      category === "careers" ||
      type.indexOf("job application") !== -1 ||
      type.indexOf("career") !== -1 ||
      sourcePage.indexOf("/careers") !== -1 ||
      Boolean(data.resume_link) ||
      Boolean(data.role_category)
    );

    var timestamp = data.timestamp || Utilities.formatDate(new Date(), "Asia/Kolkata", "dd/MM/yyyy, hh:mm:ss a");
    var safePhone = formatPhoneForSheet(data.phone || data.raw_phone || data.whatsapp || data.mobile || "");
    var displayPhone = safePhone ? safePhone.replace(/^'/, "") : "";

    // ==========================================================================
    // A. PARTNERS -> "Partners" Sheet
    // ==========================================================================
    if (isPartners) {
      var partnersHeaders = [
        "Timestamp",
        "Full Name",
        "Email Address",
        "Phone / WhatsApp",
        "Company / Agency / Channel",
        "Partner Program",
        "Details & Strategy / Goals",
        "Source Page"
      ];

      var partnersSheet = getOrCreateTargetSheet(ss, "PARTNERS");
      initHeadersIfEmpty(partnersSheet, partnersHeaders, "#034737");

      partnersSheet.appendRow([
        timestamp,
        data.name || "",
        data.email || "",
        safePhone,
        data.company || data.business || "",
        data.partner_type || data.type || "Partner Application",
        data.requirement || data.message || "",
        data.source_page || ""
      ]);

      sendEmailNotification("🤝 New Partner Application: " + (data.name || "Partner") + " (" + (data.company || data.business || "Partner Program") + ")", [
        "Full Name: " + (data.name || ""),
        "Email: " + (data.email || ""),
        "Phone / WhatsApp: " + displayPhone,
        "Company / Agency: " + (data.company || data.business || ""),
        "Partner Program: " + (data.partner_type || data.type || "Partner Application"),
        "Details / Strategy: " + (data.requirement || data.message || ""),
        "Source Page: " + (data.source_page || ""),
        "Timestamp: " + timestamp
      ]);

      return ContentService.createTextOutput(JSON.stringify({
        ok: true,
        sheet: "Partners",
        message: "Partner lead recorded successfully in Partners sheet"
      })).setMimeType(ContentService.MimeType.JSON);
    }

    // ==========================================================================
    // B. CAREERS -> "Careers" Sheet
    // ==========================================================================
    if (isCareers) {
      var careersHeaders = [
        "Timestamp",
        "Full Name",
        "Email Address",
        "Phone / WhatsApp",
        "Location / City",
        "Role Category",
        "Target Title",
        "Experience Level",
        "Employment Type",
        "Key Skills & Tech",
        "Portfolio / GitHub",
        "Resume / CV Link",
        "About & Projects",
        "Why HelloBotz",
        "Source Page"
      ];

      var careersSheet = getOrCreateTargetSheet(ss, "CAREERS");
      initHeadersIfEmpty(careersSheet, careersHeaders, "#4F46E5");

      careersSheet.appendRow([
        timestamp,
        data.name || "",
        data.email || "",
        safePhone,
        data.location || data.business || "",
        data.role_category || data.role || "",
        data.target_title || "",
        data.experience || "",
        data.employment_type || "",
        data.skills || data.selected_skills || "",
        data.portfolio || "",
        data.resume_link || "",
        data.about || data.about_projects || data.requirement || "",
        data.why || data.why_hellobotz || "",
        data.source_page || ""
      ]);

      sendEmailNotification("🚀 New Job Application: " + (data.name || "Candidate") + " (" + (data.target_title || data.role_category || "Careers") + ")", [
        "Full Name: " + (data.name || ""),
        "Email: " + (data.email || ""),
        "Phone / WhatsApp: " + displayPhone,
        "Location: " + (data.location || data.business || ""),
        "Role / Category: " + (data.role_category || data.role || ""),
        "Target Title: " + (data.target_title || ""),
        "Experience: " + (data.experience || ""),
        "Skills: " + (data.skills || data.selected_skills || ""),
        "Portfolio: " + (data.portfolio || ""),
        "Resume / CV: " + (data.resume_link || ""),
        "About: " + (data.about || data.about_projects || data.requirement || ""),
        "Why HelloBotz: " + (data.why || data.why_hellobotz || ""),
        "Source Page: " + (data.source_page || ""),
        "Timestamp: " + timestamp
      ]);

      return ContentService.createTextOutput(JSON.stringify({
        ok: true,
        sheet: "Careers",
        message: "Application recorded successfully in Careers sheet"
      })).setMimeType(ContentService.MimeType.JSON);
    }

    // ==========================================================================
    // C. GENERAL LEADS (Contact, Demo, Callbacks) -> "leads" Sheet
    // ==========================================================================
    var leadsHeaders = [
      "Timestamp",
      "Full Name",
      "Email Address",
      "Phone / WhatsApp",
      "Business / Company",
      "Inquiry Type",
      "Product / Interest",
      "Requirement / Message",
      "Source Page"
    ];

    var leadsSheet = getOrCreateTargetSheet(ss, "LEADS");
    initHeadersIfEmpty(leadsSheet, leadsHeaders, "#0F172A");

    leadsSheet.appendRow([
      timestamp,
      data.name || "",
      data.email || "",
      safePhone,
      data.business || data.company || "",
      data.type || "General Lead",
      data.product || "",
      data.requirement || data.message || "",
      data.source_page || ""
    ]);

    sendEmailNotification("📊 New Website Lead: " + (data.name || "Lead") + " (" + (data.type || "General Inquiry") + ")", [
      "Full Name: " + (data.name || ""),
      "Email: " + (data.email || ""),
      "Phone / WhatsApp: " + displayPhone,
      "Company / Business: " + (data.business || data.company || ""),
      "Inquiry Type: " + (data.type || "General Lead"),
      "Product / Interest: " + (data.product || ""),
      "Requirement / Message: " + (data.requirement || data.message || ""),
      "Source Page: " + (data.source_page || ""),
      "Timestamp: " + timestamp
    ]);

    return ContentService.createTextOutput(JSON.stringify({
      ok: true,
      sheet: "leads",
      message: "Lead recorded successfully in leads sheet"
    })).setMimeType(ContentService.MimeType.JSON);

  } catch (err) {
    return ContentService.createTextOutput(JSON.stringify({
      ok: false,
      error: err.toString()
    })).setMimeType(ContentService.MimeType.JSON);
  } finally {
    lock.releaseLock();
  }
}

/**
 * Robust Sheet Locator: strictly finds or creates the exact target tab
 */
function getOrCreateTargetSheet(ss, sheetType) {
  var sheets = ss.getSheets();

  // 1. PARTNERS TAB
  if (sheetType === "PARTNERS") {
    for (var i = 0; i < sheets.length; i++) {
      var n = sheets[i].getName().trim().toLowerCase();
      if (n === "partners" || n === "partner" || n === "sheet2") {
        return sheets[i];
      }
    }
    return ss.insertSheet("Partners");
  }

  // 2. CAREERS TAB
  if (sheetType === "CAREERS") {
    for (var i = 0; i < sheets.length; i++) {
      var n = sheets[i].getName().trim().toLowerCase();
      if (n === "careers" || n === "career" || n === "sheet3" || n === "jobs") {
        return sheets[i];
      }
    }
    return ss.insertSheet("Careers");
  }

  // 3. LEADS TAB
  for (var i = 0; i < sheets.length; i++) {
    var n = sheets[i].getName().trim().toLowerCase();
    if (n === "leads" || n === "lead" || n === "general leads" || n === "sheet1" || n === "enquiry") {
      return sheets[i];
    }
  }

  // Fallback to first sheet if it's NOT named Careers and NOT named Partners
  if (sheets.length > 0) {
    var first = sheets[0].getName().trim().toLowerCase();
    if (first !== "careers" && first !== "career" && first !== "partners" && first !== "partner" && first !== "jobs") {
      return sheets[0];
    }
  }

  return ss.insertSheet("leads");
}

/**
 * Initializes and styles header row if sheet is empty,
 * and sets the Phone column format to Plain Text.
 */
function initHeadersIfEmpty(sheet, headers, headerColorHex) {
  if (sheet.getLastRow() === 0) {
    sheet.appendRow(headers);
    var range = sheet.getRange(1, 1, 1, headers.length);
    range.setBackground(headerColorHex || "#034737");
    range.setFontColor("#FFFFFF");
    range.setFontWeight("bold");
    range.setHorizontalAlignment("center");
    sheet.setFrozenRows(1);

    // Set Phone / WhatsApp column (Column 4) format to Plain Text
    sheet.getRange(2, 4, Math.max(1, sheet.getMaxRows() - 1), 1).setNumberFormat("@");

    for (var i = 1; i <= headers.length; i++) {
      sheet.autoResizeColumn(i);
    }
  }
}

/**
 * Sends a clean, styled HTML email notification
 */
function sendEmailNotification(subject, lines) {
  if (!NOTIFICATION_EMAIL || NOTIFICATION_EMAIL.indexOf("@") === -1) {
    return;
  }
  try {
    var plainBody = lines.join("\n");
    var rowsHtml = lines.map(function(line) {
      var sepIdx = line.indexOf(": ");
      var k = sepIdx !== -1 ? line.substring(0, sepIdx) : line;
      var v = sepIdx !== -1 ? line.substring(sepIdx + 2) : "";
      return "<tr><td style='padding:8px 12px;border-bottom:1px solid #e2e8f0;font-weight:600;width:35%;color:#475569;background:#f8fafc;'>" + k + "</td><td style='padding:8px 12px;border-bottom:1px solid #e2e8f0;color:#0f172a;'>" + (v || "-") + "</td></tr>";
    }).join("");

    var htmlBody = "<div style='font-family:-apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,sans-serif;line-height:1.6;color:#1e293b;max-width:620px;margin:20px auto;border:1px solid #cbd5e1;border-radius:10px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.05);'>"
      + "<div style='background:#034737;padding:18px 24px;border-bottom:3px solid #10b981;'>"
      + "<h2 style='color:#ffffff;margin:0;font-size:1.25rem;'>" + subject + "</h2>"
      + "</div>"
      + "<div style='padding:20px 24px;background:#ffffff;'>"
      + "<table style='width:100%;border-collapse:collapse;margin:10px 0;'>"
      + rowsHtml
      + "</table>"
      + "</div>"
      + "<div style='padding:12px 24px;background:#f1f5f9;font-size:12px;color:#64748b;text-align:center;border-top:1px solid #e2e8f0;'>"
      + "HelloBotz Multi-Sheet Lead Router · Automated Notification"
      + "</div>"
      + "</div>";

    MailApp.sendEmail({
      to: NOTIFICATION_EMAIL,
      subject: subject,
      body: plainBody,
      htmlBody: htmlBody
    });
  } catch (err) {
    Logger.log("Email notification error: " + err);
  }
}

/**
 * Creates custom menu in Google Sheets whenever the spreadsheet is opened
 */
function onOpen() {
  SpreadsheetApp.getUi()
    .createMenu("🚀 HelloBotz Tools")
    .addItem("🛠️ Fix All Phone #ERROR! Cells", "fixExistingPhoneErrors")
    .addItem("📋 Setup All Sheets & Headers", "setupAllSheets")
    .addToUi();
}

/**
 * ==============================================================================
 * 🛠️ 1-CLICK REPAIR TOOL FOR EXISTING LEADS:
 * ==============================================================================
 * Scans all sheets in this spreadsheet ("Careers", "Partners", "leads", "Enquiry")
 * Finds any cell in the Phone column containing "#ERROR!" or starting with "+"
 * Recovers the phone number from the formula and converts it to clean text!
 * 
 * Works without deleting or creating any new sheets! Preserves all existing rows!
 */
function fixExistingPhoneErrors() {
  var ss = SpreadsheetApp.getActiveSpreadsheet();
  var sheets = ss.getSheets();
  var totalFixed = 0;

  for (var s = 0; s < sheets.length; s++) {
    var sheet = sheets[s];
    var lastRow = sheet.getLastRow();
    var lastCol = sheet.getLastColumn();
    if (lastRow < 2 || lastCol < 1) continue;

    // Find the "Phone / WhatsApp" column index dynamically from header row
    var headers = sheet.getRange(1, 1, 1, lastCol).getValues()[0];
    var phoneColIndex = -1;
    for (var h = 0; h < headers.length; h++) {
      var headerName = String(headers[h]).toLowerCase();
      if (headerName.indexOf("phone") !== -1 || headerName.indexOf("whatsapp") !== -1 || headerName.indexOf("mobile") !== -1) {
        phoneColIndex = h + 1; // 1-based column
        break;
      }
    }
    if (phoneColIndex === -1) continue;

    // Set the entire phone column format to Plain Text ("@")
    sheet.getRange(2, phoneColIndex, lastRow - 1, 1).setNumberFormat("@");

    // Inspect each cell in the phone column
    for (var r = 2; r <= lastRow; r++) {
      var cell = sheet.getRange(r, phoneColIndex);
      var formula = cell.getFormula();
      var displayVal = cell.getDisplayValue();

      // Case 1: Cell shows #ERROR! or has a formula like =+43 665... or =+86...
      if (displayVal === "#ERROR!" || (formula && formula.length > 0)) {
        var rawNumber = formula;
        if (!rawNumber) {
          rawNumber = cell.getValue();
        }
        var cleaned = String(rawNumber).replace(/^[+=]+/, "+").trim();
        if (cleaned) {
          cell.setValue("'" + cleaned);
          totalFixed++;
          Logger.log("Fixed Row " + r + " in sheet '" + sheet.getName() + "': " + cleaned);
        }
      }
    }
  }

  SpreadsheetApp.flush();
  var msg = "Done! Repaired " + totalFixed + " phone number cell(s) across all sheets.";
  Logger.log(msg);
  try {
    SpreadsheetApp.getUi().alert("HelloBotz Leads", msg, SpreadsheetApp.getUi().ButtonSet.OK);
  } catch (uiErr) {}
}

/**
 * ONE-CLICK SETUP: Run this function once manually in Apps Script to instantly
 * verify or create all 3 tabs (leads, Partners, Careers) with their header rows!
 */
function setupAllSheets() {
  var ss = SpreadsheetApp.getActiveSpreadsheet();

  var leadsHeaders = [
    "Timestamp", "Full Name", "Email Address", "Phone / WhatsApp",
    "Business / Company", "Inquiry Type", "Product / Interest",
    "Requirement / Message", "Source Page"
  ];
  var partnersHeaders = [
    "Timestamp", "Full Name", "Email Address", "Phone / WhatsApp",
    "Company / Agency / Channel", "Partner Program",
    "Details & Strategy / Goals", "Source Page"
  ];
  var careersHeaders = [
    "Timestamp", "Full Name", "Email Address", "Phone / WhatsApp",
    "Location / City", "Role Category", "Target Title",
    "Experience Level", "Employment Type", "Key Skills & Tech",
    "Portfolio / GitHub", "Resume / CV Link", "About & Projects",
    "Why HelloBotz", "Source Page"
  ];

  var leadsSheet = getOrCreateTargetSheet(ss, "LEADS");
  initHeadersIfEmpty(leadsSheet, leadsHeaders, "#0F172A");

  var partnersSheet = getOrCreateTargetSheet(ss, "PARTNERS");
  initHeadersIfEmpty(partnersSheet, partnersHeaders, "#034737");

  var careersSheet = getOrCreateTargetSheet(ss, "CAREERS");
  initHeadersIfEmpty(careersSheet, careersHeaders, "#4F46E5");

  Logger.log("Done! Verified/created 'leads', 'Partners', and 'Careers' sheets.");
}
