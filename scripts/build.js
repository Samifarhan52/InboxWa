const fs = require('fs');
const path = require('path');
const { execFileSync } = require('child_process');

const rootDir = process.cwd();
const publicDir = path.join(rootDir, 'public');
fs.mkdirSync(publicDir, { recursive: true });

function log(msg) {
  console.log(msg);
  fs.appendFileSync(path.join(publicDir, 'build_log.txt'), msg + '\n');
}

try {
  log('🚀 Starting InboxWa Static Site Generation...');

  const phpBin = path.join(rootDir, 'node_modules', '@libphp', 'almalinux-9-v85', 'native', 'php', 'php');
  const libDir = path.join(rootDir, 'node_modules', '@libphp', 'almalinux-9-v85', 'native', 'lib');
  const modDir = path.join(rootDir, 'node_modules', '@libphp', 'almalinux-9-v85', 'native', 'php', 'modules');

  if (!fs.existsSync(phpBin)) {
    throw new Error('PHP binary not found at: ' + phpBin);
  }

  try {
    fs.chmodSync(phpBin, 0o755);
    log('✅ Chmod 755 php binary');
  } catch (e) {
    log('⚠️ Chmod warning: ' + e.message);
  }

  // Copy static assets
  const staticFiles = [
    'app.css', 'main.js', 'forms.js', 'i18n.js', 'robots.txt', 'sitemap.xml', 'favicon.ico', 'favicon.png'
  ];
  for (const file of staticFiles) {
    const src = path.join(rootDir, file);
    if (fs.existsSync(src)) {
      fs.copyFileSync(src, path.join(publicDir, file));
      log(`📦 Copied static asset: ${file}`);
    }
  }

  // Generate ini
  const iniPath = path.join(rootDir, 'build-php.ini');
  const iniContent = `
extension_dir = "${modDir}"
extension = pdo.so
extension = pdo_sqlite.so
extension = sqlite3.so
extension = mbstring.so
date.timezone = UTC
display_errors = Off
display_startup_errors = Off
log_errors = On
`;
  fs.writeFileSync(iniPath, iniContent);

  const ignoreDirs = new Set([
    'node_modules', '.git', 'public', 'api', 'admin', 'secure-console-x7',
    'scripts', 'includes', 'config', 'custom-builders'
  ]);

  function findPhpPages(dir, fileList = []) {
    const items = fs.readdirSync(dir, { withFileTypes: true });
    for (const item of items) {
      if (item.isDirectory()) {
        if (!ignoreDirs.has(item.name)) {
          findPhpPages(path.join(dir, item.name), fileList);
        }
      } else if (item.name === 'index.php') {
        fileList.push(path.join(dir, item.name));
      }
    }
    return fileList;
  }

  const phpFiles = findPhpPages(rootDir);
  log(`🔍 Discovered ${phpFiles.length} pages to render.`);

  let renderedCount = 0;
  let failedCount = 0;

  for (const filePath of phpFiles) {
    const relPath = path.relative(rootDir, filePath);
    let outPath;
    let reqUri;

    if (relPath === 'index.php') {
      outPath = path.join(publicDir, 'index.html');
      reqUri = '/';
    } else {
      const dir = path.dirname(relPath);
      outPath = path.join(publicDir, dir, 'index.html');
      reqUri = '/' + dir.replace(/\\/g, '/') + '/';
    }

    fs.mkdirSync(path.dirname(outPath), { recursive: true });

    const env = {
      ...process.env,
      LD_LIBRARY_PATH: `${libDir}:${process.env.LD_LIBRARY_PATH || ''}`,
      REQUEST_URI: reqUri,
      SCRIPT_NAME: '/index.php',
      SCRIPT_FILENAME: filePath,
      PHP_INI_SCAN_DIR: ''
    };

    try {
      const html = execFileSync(phpBin, ['-c', iniPath, filePath], {
        cwd: path.dirname(filePath),
        env: env,
        maxBuffer: 50 * 1024 * 1024
      });
      fs.writeFileSync(outPath, html);
      renderedCount++;
      if (renderedCount % 25 === 0 || relPath.startsWith('industry/')) {
        log(`✅ [${renderedCount}/${phpFiles.length}] Rendered: ${reqUri}`);
      }
    } catch (err) {
      log(`❌ Failed rendering ${relPath}: ${err.message}`);
      failedCount++;
    }
  }

  const homeHtml = path.join(publicDir, 'index.html');
  if (fs.existsSync(homeHtml)) {
    fs.copyFileSync(homeHtml, path.join(publicDir, '404.html'));
  }

  log(`\n🎉 Build Complete! Successfully rendered ${renderedCount} pages (${failedCount} failed).`);

} catch (globalErr) {
  log(`\n💥 Fatal Global Error: ${globalErr.stack || globalErr.message}`);
}
