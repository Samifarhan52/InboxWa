#!/bin/bash
set -e

echo "BUILD PATCH RUNNING" > public/patch_ran.txt
echo "Date: $(date)" >> public/patch_ran.txt

# Find all index.js files in vercel-php builders
PHP_FILES=$(find / -name "index.js" -path "*vercel-php*" 2>/dev/null || true)
echo "Found PHP files: $PHP_FILES" >> public/patch_ran.txt

for f in $PHP_FILES; do
  echo "Inspecting $f" >> public/patch_ran.txt
  if grep -q "launcher.launcher" "$f" 2>/dev/null; then
    sed -i "s/handler: 'launcher.launcher'/handler: 'launcher.js'/g" "$f" 2>/dev/null || true
    sed -i 's/handler: "launcher.launcher"/handler: "launcher.js"/g' "$f" 2>/dev/null || true
    echo "Patched $f" >> public/patch_ran.txt
  fi
done
