#!/bin/bash
set -e

echo "=== Searching for vercel-php dist/index.js to patch ==="

FILES=$(find / -name "index.js" -path "*vercel-php*" 2>/dev/null || true)

for PHP_FILE in $FILES; do
  if grep -q "launcher.launcher" "$PHP_FILE" 2>/dev/null; then
    echo "Found unpatched file: $PHP_FILE"
    sed -i "s/handler: 'launcher.launcher'/handler: 'launcher.js'/g" "$PHP_FILE" 2>/dev/null || true
    sed -i 's/handler: "launcher.launcher"/handler: "launcher.js"/g' "$PHP_FILE" 2>/dev/null || true
    echo "Successfully patched: $PHP_FILE"
  fi
done

echo "=== Patching complete ==="
