import os
import sys
import shutil
import subprocess

root_dir = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
public_dir = os.path.join(root_dir, 'public')
os.makedirs(public_dir, exist_ok=True)

log_file = os.path.join(public_dir, 'build_log.txt')

def log(msg):
    print(msg, flush=True)
    with open(log_file, 'a', encoding='utf-8') as f:
        f.write(msg + '\n')

log("🚀 Starting InboxWa Static Site Generation via Python 3...")

php_bin = os.path.join(root_dir, 'node_modules', '@libphp', 'almalinux-9-v85', 'native', 'php', 'php')
lib_dir = os.path.join(root_dir, 'node_modules', '@libphp', 'almalinux-9-v85', 'native', 'lib')
mod_dir = os.path.join(root_dir, 'node_modules', '@libphp', 'almalinux-9-v85', 'native', 'php', 'modules')

if not os.path.exists(php_bin):
    log(f"❌ PHP binary not found at: {php_bin}")
    sys.exit(1)

try:
    os.chmod(php_bin, 0o755)
    log("✅ Chmod 755 php binary successful")
except Exception as e:
    log(f"⚠️ Chmod warning: {e}")

# Copy static assets to public/
static_files = ['app.css', 'main.js', 'forms.js', 'i18n.js', 'robots.txt', 'sitemap.xml', 'favicon.ico', 'favicon.png']
for f in static_files:
    src = os.path.join(root_dir, f)
    if os.path.exists(src):
        shutil.copy2(src, os.path.join(public_dir, f))
        log(f"📦 Copied static asset: {f}")

# Create build-php.ini
ini_path = os.path.join(root_dir, 'build-php.ini')
ini_content = f"""
extension_dir = "{mod_dir}"
extension = pdo.so
extension = pdo_sqlite.so
extension = sqlite3.so
extension = mbstring.so
date.timezone = UTC
display_errors = Off
display_startup_errors = Off
log_errors = On
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
"""
with open(ini_path, 'w', encoding='utf-8') as f:
    f.write(ini_content)

ignore_dirs = {
    'node_modules', '.git', 'public', 'api', 'admin', 'secure-console-x7',
    'scripts', 'includes', 'config', 'custom-builders'
}

php_files = []
for dirpath, dirnames, filenames in os.walk(root_dir):
    # filter in-place
    dirnames[:] = [d for d in dirnames if d not in ignore_dirs]
    if 'index.php' in filenames:
        php_files.append(os.path.join(dirpath, 'index.php'))

log(f"🔍 Discovered {len(php_files)} pages to render.")

rendered_count = 0
failed_count = 0

for file_path in sorted(php_files):
    rel_path = os.path.relpath(file_path, root_dir)
    
    if rel_path == 'index.php':
        out_path = os.path.join(public_dir, 'index.html')
        req_uri = '/'
    else:
        folder = os.path.dirname(rel_path)
        out_path = os.path.join(public_dir, folder, 'index.html')
        req_uri = '/' + folder.replace('\\', '/') + '/'

    os.makedirs(os.path.dirname(out_path), exist_ok=True)

    env = os.environ.copy()
    env['LD_LIBRARY_PATH'] = f"{lib_dir}:{env.get('LD_LIBRARY_PATH', '')}"
    env['REQUEST_URI'] = req_uri
    env['SCRIPT_NAME'] = '/index.php'
    env['SCRIPT_FILENAME'] = file_path
    env['PHP_INI_SCAN_DIR'] = ''

    try:
        proc = subprocess.run(
            [php_bin, '-c', ini_path, file_path],
            cwd=os.path.dirname(file_path),
            env=env,
            stdout=subprocess.PIPE,
            stderr=subprocess.PIPE,
            timeout=30
        )
        
        if proc.stdout:
            with open(out_path, 'wb') as out_f:
                out_f.write(proc.stdout)
            rendered_count += 1
            if rendered_count % 25 == 0 or rel_path.startswith('industry/'):
                log(f"✅ [{rendered_count}/{len(php_files)}] Rendered: {reqUri if 'reqUri' in locals() else req_uri}")
        else:
            log(f"⚠️ Empty output for {rel_path}: {proc.stderr.decode('utf-8', errors='ignore')[:200]}")
            failed_count += 1
    except Exception as e:
        log(f"❌ Failed rendering {rel_path}: {e}")
        failed_count += 1

# 404 fallback
home_html = os.path.join(public_dir, 'index.html')
if os.path.exists(home_html):
    shutil.copy2(home_html, os.path.join(public_dir, '404.html'))

log(f"\n🎉 Build Complete! Successfully rendered {rendered_count} pages ({failed_count} failed).")
