#!/usr/bin/env bash
set -euo pipefail

# Manual deploy script — run on VPS after provisioning
# Usage: sudo bash deploy.sh

APP_PATH="/var/www/landing-page"

echo "=== Deploying Nusantara Mining ==="

cd "${APP_PATH}"

git pull origin main

composer install --no-dev --optimize-autoloader --no-interaction

php artisan migrate --force
php artisan storage:link
php artisan optimize:clear
php artisan optimize
php artisan route:cache
php artisan view:cache
php artisan config:cache

npm ci --production
npm run build

systemctl reload php8.2-fpm
nginx -t && systemctl reload nginx

echo "=== Deploy complete ==="
