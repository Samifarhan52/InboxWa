# Complete Hostinger Deployment Guide for HelloBotz

This project is 100% prepared and optimized for deployment on **Hostinger** (Shared Hosting, Cloud Hosting, or VPS).

---

## Architecture Overview on Hostinger
- **Web Server**: LiteSpeed / Apache (Supported out-of-the-box).
- **Backend**: Native PHP 8.1+ with  rewrite rules.
- **Lead Capture**: Forms post to `/api/lead`, routed seamlessly to `php-api/lead.php` via `.htaccess`.
- **Google Sheets Sync**: Real-time server-side cURL forwarding directly to your Google Sheet webhook.
- **Offline Redundancy**: Leads and CMS settings persist to local SQLite in `secure-console-x7/data/leads.sqlite`.

---

## Method 1: Git Auto-Deployment in Hostinger (Recommended)

Hostinger includes built-in Git deployment that automatically pulls changes whenever you push to GitHub:

1. Log into **[Hostinger hPanel](https://hpanel.hostinger.com/)**.
2. Navigate to **Websites** &rarr; select your domain &rarr; click **Dashboard**.
3. In the left search bar or under **Advanced**, click **GIT**.
4. Configure Git Repository:
   - **Repository**: `https://github.com/Samifarhan52/InboxWa.git`
   - **Branch**: `main`
   - **Install Directory**: `public_html` (or leave default root)
5. Click **Create**.
6. Hostinger will clone the repository into your `public_html` folder in a few seconds!

### Setting Up Auto-Deploy Webhook (Optional)
To have Hostinger deploy automatically on every `git push`:
1. In the Hostinger Git page, copy the **Webhook URL**.
2. Go to your GitHub repository &rarr; **Settings** &rarr; **Webhooks** &rarr; **Add Webhook**.
3. Paste the Hostinger Webhook URL, set Content Type to `application/json`, and save.
4. Now every push automatically updates your live site!

---

## Method 2: Manual File Upload (ZIP via File Manager)

If you prefer uploading files directly:
1. In your local project folder, zip all the files (or use the repository download).
2. In Hostinger hPanel, go to **Files** &rarr; **File Manager** (`public_html`).
3. Click **Upload** (top right) &rarr; choose your zip file.
4. Right-click the uploaded zip file &rarr; select **Extract** into `public_html`.
5. Verify that `.htaccess`, `index.php`, `api/`, and `includes/` are present in `public_html`.

---

## Hostinger Configuration Checklist

### 1. PHP Version
- In hPanel &rarr; **Advanced** &rarr; **PHP Configuration**:
  - Select **PHP 8.1** or **PHP 8.2** (or **PHP 8.3**).
  - Under **PHP Extensions**, ensure the following are enabled (they are on by default):
    - `curl`
    - `pdo_sqlite`
    - `sqlite3`
    - `mbstring`
    - `openssl`

### 2. Free SSL Certificate
- In hPanel &rarr; **Security** &rarr; **SSL**:
  - Click **Install SSL** (Let's Encrypt is 100% free and auto-renews).
  - Toggle **Force HTTPS** to `ON`.

### 3. Folder Permissions (for SQLite CMS & Offline Leads)
- In File Manager, navigate to `secure-console-x7/`.
- Right-click the `data` folder &rarr; **Permissions** &rarr; set to **755** (or **775**).
- This allows PHP to write and update the local database.

---

## Testing Your Hostinger Deployment

1. **Visit Your Domain**: Open `https://yourdomain.com` &mdash; verify SSL, responsive navigation, and fast page load.
2. **Mobile Compatibility**: Open on your phone &mdash; test the hamburger drawer, smooth scrolling, and 3D card flip.
3. **Submit a Lead**:
   - Click **"Start Free"** &rarr; fill out the Free Trial modal.
   - Click **Submit** &rarr; check your [Google Sheet tab](https://docs.google.com/spreadsheets/d/1Sxo1jeT8AIGpft-faGgh-zKlXCDgAO17CkLZD0xFw-o/edit).
   - The lead appears instantly!
