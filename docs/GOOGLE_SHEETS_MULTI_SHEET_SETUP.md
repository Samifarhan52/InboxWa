# HelloBotz Multi-Sheet Google Sheets Setup Guide

This guide explains how to configure your Google Spreadsheet to automatically segregate incoming submissions into 3 distinct sheets:

- 📊 **Sheet 1: "General Leads"** (Contact forms, Demo bookings, Pricing inquiries, Callback requests)
- 🤝 **Sheet 2: "Partners"** (Affiliate, Agency, White Label, and Technology Partners)
- 🚀 **Sheet 3: "Careers"** (Job applicants, Freshers, Internships, Portfolio & Resume links)

---

## 2-Minute Quick Setup

### Step 1: Open Your Google Spreadsheet
1. Open the Google Spreadsheet where you want to collect leads.
2. If you already have `Sheet1`, `Sheet2`, and `Sheet3`, the script will use them.
3. *Note: If Sheet2 or Sheet3 do not exist yet, the script will automatically create them for you with styled header rows!*

### Step 2: Open Apps Script Editor
1. In the top menu of your Google Sheet, click **Extensions** > **Apps Script**.
2. A new tab will open with the script editor (`Code.gs`).

### Step 3: Paste the Router Script
1. Delete any existing code inside `Code.gs`.
2. Open [`config/google-sheet-router.js`](../config/google-sheet-router.js) from your repository.
3. Copy all code and paste it into `Code.gs`.
4. Click the **Save** icon (disk icon) or press `Ctrl + S` / `Cmd + S`.

### Step 4: Deploy as Web App
1. Click the blue **Deploy** button at the top right > select **New deployment** (or **Manage deployments** > **Edit** if modifying an existing one).
2. For *Select type* (gear icon), choose **Web app**.
3. Fill in the deployment details:
   - **Description**: `HelloBotz Multi-Sheet Lead Router v1`
   - **Execute as**: `Me (your email)`
   - **Who has access**: `Anyone` *(Crucial: This allows the website form to post leads securely without requiring visitors to sign into Google).*
4. Click **Deploy**.
5. If Google asks for authorization:
   - Click **Authorize access** > choose your Google account.
   - Click **Advanced** > click **Go to Untitled project (unsafe)** > click **Allow**.
6. Google will provide a **Web app URL** ending in `/exec`.
   *(Example: `https://script.google.com/macros/s/AKfy.../exec`)*
7. Copy this URL.

### Step 5: Update Your Webhook URL
1. Open [`config/leads-webhook.json`](../config/leads-webhook.json) in your project.
2. Paste the new URL:
   ```json
   {
     "google_sheet_webhook_url": "YOUR_COPIED_URL_HERE"
   }
   ```
3. Save the file. That's it! Every future submission will instantly route to the correct sheet tab.

---

## Sheet Breakdown & Columns

### 1. General Leads (Sheet 1)
- **Timestamp**
- **Full Name**
- **Email Address**
- **Phone / WhatsApp**
- **Business / Company**
- **Inquiry Type**
- **Product / Interest**
- **Requirement / Message**
- **Source Page**

### 2. Partners (Sheet 2)
- **Timestamp**
- **Full Name**
- **Email Address**
- **Phone / WhatsApp**
- **Company / Agency / Channel**
- **Partner Program** (Affiliate, Agency, White-Label, Tech)
- **Details & Strategy / Goals**
- **Source Page**

### 3. Careers (Sheet 3)
- **Timestamp**
- **Full Name**
- **Email Address**
- **Phone / WhatsApp**
- **Location / City**
- **Role Category**
- **Target Title**
- **Experience Level**
- **Employment Type**
- **Key Skills & Tech**
- **Portfolio / GitHub**
- **Resume / CV Link**
- **About & Projects**
- **Why HelloBotz**
- **Source Page**
