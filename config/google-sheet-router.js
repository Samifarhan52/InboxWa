/**
 * ==============================================================================
 * HELLOBOTZ MULTI-SHEET LEAD, PARTNER & RECRUITMENT ROUTER (Google Apps Script)
 * ==============================================================================
 * 
 * Automatically segregates and routes submissions into 3 distinct sheets:
 * 
 * - SHEET 1: "General Leads"  -> Contact forms, Demo Bookings, Inquiries, Pricing
 * - SHEET 2: "Partners"       -> Affiliate, Agency, White-Label & Tech Partners
 * - SHEET 3: "Careers"        -> Job Applications, Freshers, Internships & CVs
 * 
 * Features:
 *  - Auto-creates sheet tabs if they don't already exist.
 *  - Automatically sets up professional frozen header rows with custom brand colors.
 *  - Auto-adjusts column widths for optimal readability.
 *  - Optional instant email notification to your inbox for every submission!
 *  - Handles concurrency safely with LockService.
 * ==============================================================================
 */

// ==============================================================================
// 1. CONFIGURATION
// ==============================================================================
// Set your email here to receive instant email alerts for every submission.
// Leave as "" if you only want rows saved to the Google Sheet without email alerts.
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

    // Determine target category and sheet
    var targetSheet = (data.target_sheet || "").toUpperCase();
    var category = (data.category || "").toLowerCase();
    var type = (data.type || "").toLowerCase();
    var sourcePage = (data.source_page || "").toLowerCase();

    var isCareers = (
      targetSheet === "SHEET3" ||
      category === "careers" ||
      type.indexOf("job application") !== -1 ||
      sourcePage.indexOf("/careers") !== -1
    );

    var isPartners = (
      targetSheet === "SHEET2" ||
      category === "partners" ||
      type.indexOf("partner") !== -1 ||
      sourcePage.indexOf("/partners") !== -1 ||
      data.partner_type
    );

    var timestamp = data.timestamp || Utilities.formatDate(new Date(), "Asia/Kolkata", "dd/MM/yyyy, hh:mm:ss a");

    // ==========================================================================
    // 1. CAREERS -> SHEET 3
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

      var careersSheet = getOrCreateSheet(ss, "Sheet3", "Careers", careersHeaders, "#4F46E5");

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

      // Optional Instant Email Alert
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
        sheet: "Sheet3 (Careers)",
        message: "Application recorded successfully"
      })).setMimeType(ContentService.MimeType.JSON);
    }

    // ==========================================================================
    // 2. PARTNERS -> SHEET 2
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

      var partnersSheet = getOrCreateSheet(ss, "Sheet2", "Partners", partnersHeaders, "#034737");

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

      // Optional Instant Email Alert
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
        sheet: "Sheet2 (Partners)",
        message: "Partner lead recorded successfully"
      })).setMimeType(ContentService.MimeType.JSON);
    }

    // ==========================================================================
    // 3. GENERAL LEADS -> SHEET 1
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

    var leadsSheet = getOrCreateSheet(ss, "Sheet1", "General Leads", leadsHeaders, "#0F172A");

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

    // Optional Instant Email Alert
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
      sheet: "Sheet1 (General Leads)",
      message: "Lead recorded successfully"
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
 * Helper to locate or generate a sheet tab with styled headers
 */
function getOrCreateSheet(ss, sheetId, fallbackName, headers, headerColorHex) {
  var sheet = ss.getSheetByName(sheetId) || ss.getSheetByName(fallbackName);

  if (!sheet) {
    var allSheets = ss.getSheets();
    if (sheetId === "Sheet1" && allSheets.length >= 1) sheet = allSheets[0];
    else if (sheetId === "Sheet2" && allSheets.length >= 2) sheet = allSheets[1];
    else if (sheetId === "Sheet3" && allSheets.length >= 3) sheet = allSheets[2];
  }

  if (!sheet) {
    sheet = ss.insertSheet(fallbackName);
  }

  // If header row does not exist, initialize it
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

  return sheet;
}
