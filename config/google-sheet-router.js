/**
 * ==============================================================================
 * HELLOBOTZ MULTI-SHEET ROUTER (Google Apps Script) — FIXED VERSION
 * ==============================================================================
 * 
 * Automatically segregates and routes submissions into 3 distinct sheets:
 * 
 * - SHEET 1: "leads"     -> General Leads, Demo Bookings, Callbacks, Contact forms
 * - SHEET 2: "Partners"  -> Affiliate, Agency, White-Label & Technology Partners
 * - SHEET 3: "Careers"   -> Job Applications, Freshers, Internships & CVs
 * 
 * Features:
 *  - Strict name-based matching: NEVER confuses or merges sheets.
 *  - Auto-creates "Partners" tab instantly if not already present.
 *  - Professional frozen headers with custom brand colors.
 *  - Concurrency protected with LockService.
 *  - Optional instant email notifications.
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
        data.phone || "",
        data.company || data.business || "",
        data.partner_type || data.type || "Partner Application",
        data.requirement || data.message || "",
        data.source_page || ""
      ]);

      sendEmailNotification("🤝 New Partner Application: " + (data.name || "Partner") + " (" + (data.company || data.business || "Partner Program") + ")", [
        "Full Name: " + (data.name || ""),
        "Email: " + (data.email || ""),
        "Phone / WhatsApp: " + (data.phone || ""),
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
        data.phone || "",
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
        "Phone / WhatsApp: " + (data.phone || ""),
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
      data.phone || "",
      data.business || data.company || "",
      data.type || "General Lead",
      data.product || "",
      data.requirement || data.message || "",
      data.source_page || ""
    ]);

    sendEmailNotification("📊 New Website Lead: " + (data.name || "Lead") + " (" + (data.type || "General Inquiry") + ")", [
      "Full Name: " + (data.name || ""),
      "Email: " + (data.email || ""),
      "Phone / WhatsApp: " + (data.phone || ""),
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
    if (n === "leads" || n === "lead" || n === "general leads" || n === "sheet1") {
      return sheets[i];
    }
  }

  // Fallback to the first sheet if it's NOT named Careers and NOT named Partners
  if (sheets.length > 0) {
    var first = sheets[0].getName().trim().toLowerCase();
    if (first !== "careers" && first !== "career" && first !== "partners" && first !== "partner" && first !== "jobs") {
      return sheets[0];
    }
  }

  return ss.insertSheet("leads");
}

/**
 * Initializes and styles header row if sheet is empty
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
