#!/usr/bin/env bash
set -euo pipefail

# Nusantara Mining - VPS Provisioning Script
# Tested on Ubuntu 22.04 / 24.04
# Run as root: sudo bash provision.sh

APP_DOMAIN="${1:-localhost}"
APP_PATH="/var/www/landing-page"

echo "=== Provisioning VPS for Nusantara Mining ==="

apt update -y
apt upgrade -y

# PHP 8.2 + extensions
apt install -y software-properties-common
add-apt-repository -y ppa:ondrej/php
apt update -y
apt install -y php8.2-fpm php8.2-cli php8.2-mysql php8.2-mbstring php8.2-xml php8.2-curl php8.2-gd php8.2-zip php8.2-bcmath unzip nginx mysql-server certbot python3-certbot-nginx git curl

# Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
rm composer-setup.php

# Node.js 20
curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
apt install -y nodejs

# MySQL secure setup
mysql <<EOF
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '';
FLUSH PRIVILEGES;
CREATE DATABASE IF NOT EXISTS mining_company CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EOF

# Nginx
cat > /etc/nginx/sites-available/landing-page <<NGINX
server {
    listen 80;
    server_name ${APP_DOMAIN};
    root ${APP_PATH}/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";
    add_header X-XSS-Protection "1; mode=block";

    index index.php;

    charset utf-8;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php\$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }

    location ~ \.(js|css|png|jpg|jpeg|gif|ico|svg|webp|woff|woff2)\$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }
}
NGINX

ln -sf /etc/nginx/sites-available/landing-page /etc/nginx/sites-enabled/
rm -f /etc/nginx/sites-enabled/default

# Clone project (if not exists)
if [ ! -d "${APP_PATH}" ]; then
    git clone https://github.com/farisabqari/mining.git "${APP_PATH}"
fi

# Permissions
chown -R www-data:www-data "${APP_PATH}/storage" "${APP_PATH}/bootstrap/cache" 2>/dev/null || true
chmod -R 775 "${APP_PATH}/storage" "${APP_PATH}/bootstrap/cache" 2>/dev/null || true

# PHP-FPM pool tuning
sed -i 's/^pm.max_children = .*/pm.max_children = 50/' /etc/php/8.2/fpm/pool.d/www.conf
sed -i 's/^pm.start_servers = .*/pm.start_servers = 5/' /etc/php/8.2/fpm/pool.d/www.conf
sed -i 's/^pm.min_spare_servers = .*/pm.min_spare_servers = 5/' /etc/php/8.2/fpm/pool.d/www.conf
sed -i 's/^pm.max_spare_servers = .*/pm.max_spare_servers = 15/' /etc/php/8.2/fpm/pool.d/www.conf

# Restart services
systemctl restart php8.2-fpm
systemctl restart nginx
systemctl enable php8.2-fpm nginx

echo ""
echo "=== Provisioning complete ==="
echo ""
echo "Next steps:"
echo "  1. cd ${APP_PATH}"
echo "  2. cp .env.example .env"
echo "  3. Edit .env: DB_DATABASE=mining_company, DB_USERNAME=root, DB_PASSWORD="
echo "  4. php artisan key:generate"
echo "  5. php artisan migrate --seed"
echo "  6. php artisan storage:link"
echo "  7. npm ci && npm run build"
echo "  8. Setup SSL: certbot --nginx -d ${APP_DOMAIN}"
echo ""
echo "Then add these GitHub secrets:"
echo "  DEPLOY_HOST    = $(curl -s ifconfig.me 2>/dev/null || hostname -I | awk '{print $1}')"
echo "  DEPLOY_USER    = root"
echo "  DEPLOY_SSH_KEY = (your private SSH key)"
echo "  DEPLOY_PATH    = ${APP_PATH}"
