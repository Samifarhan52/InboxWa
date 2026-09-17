/**
 * ==============================================================================
 * HELLOBOTZ MULTI-SHEET LEAD & RECRUITMENT ROUTER (Google Apps Script)
 * ==============================================================================
 * 
 * Automatically segregates and routes submissions to separate sheets:
 * 
 * - SHEET 1: "General Leads"  -> Contact forms, Demo Bookings, Inquiries, Pricing
 * - SHEET 2: "Partners"       -> Affiliate, Agency, White-Label & Tech Partners
 * - SHEET 3: "Careers"        -> Job Applications, Freshers, Internships
 * 
 * Features:
 *  - Auto-creates tabs if they don't already exist.
 *  - Automatically sets up professional frozen header rows with custom colors.
 *  - Auto-adjusts column widths for optimal readability.
 *  - Handles concurrency safely with LockService.
 * ==============================================================================
 */

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
 * Helper to locate or generate a sheet with styled headers
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

/**
 * Test function to verify script manually inside Google Apps Script editor
 */
function testMultiSheetRouter() {
  var testLead = {
    postData: {
      contents: JSON.stringify({
        timestamp: Utilities.formatDate(new Date(), "Asia/Kolkata", "dd/MM/yyyy, hh:mm:ss a"),
        type: "Demo Request",
        name: "John Doe",
        email: "john@example.com",
        phone: "+91 98765 43210",
        business: "TechCorp",
        requirement: "Looking for WhatsApp API automation"
      })
    }
  };

  var testPartner = {
    postData: {
      contents: JSON.stringify({
        timestamp: Utilities.formatDate(new Date(), "Asia/Kolkata", "dd/MM/yyyy, hh:mm:ss a"),
        type: "partner",
        partner_type: "agency",
        target_sheet: "Sheet2",
        name: "Agency Owner",
        email: "owner@agency.com",
        phone: "+91 98765 43211",
        company: "Growth Media LLC",
        message: "50+ clients looking for WhatsApp white label"
      })
    }
  };

  var testCareer = {
    postData: {
      contents: JSON.stringify({
        timestamp: Utilities.formatDate(new Date(), "Asia/Kolkata", "dd/MM/yyyy, hh:mm:ss a"),
        type: "Job Application: AI Automation Engineer",
        target_sheet: "Sheet3",
        name: "Sarah Dev",
        email: "sarah@dev.com",
        phone: "+91 98765 43212",
        location: "Bengaluru",
        role_category: "AI & Automation Engineer",
        target_title: "Lead AI Engineer",
        experience: "1 - 3 Years",
        employment_type: "Full-Time",
        skills: "n8n, Python, WhatsApp Cloud API",
        portfolio: "https://github.com/sarahdev",
        resume_link: "https://drive.google.com/file/...",
        about: "Built 10+ custom n8n workflows and WhatsApp bots",
        why: "Passionate about AI agents and automating business systems"
      })
    }
  };

  Logger.log(doPost(testLead).getContent());
  Logger.log(doPost(testPartner).getContent());
  Logger.log(doPost(testCareer).getContent());
}
