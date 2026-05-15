#!/bin/bash
set -e

PORT="${PORT:-80}"
DB_PASSWORD="${DB_PASSWORD:-fanbanna}"

sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf

if [ ! -f /var/lib/mysql/.render-configured ]; then
  mariadb-install-db --user=mysql --datadir=/var/lib/mysql >/dev/null
  service mariadb start
  for i in $(seq 1 30); do
    mariadb-admin ping --silent 2>/dev/null && break
    sleep 1
  done
  mariadb -u root -e "CREATE DATABASE IF NOT EXISTS registration;"
  mariadb-admin -u root password "${DB_PASSWORD}"
  mariadb -u root -p"${DB_PASSWORD}" registration < /var/www/html/schema.sql
  touch /var/lib/mysql/.render-configured
else
  service mariadb start
  for i in $(seq 1 30); do
    mariadb-admin ping --silent 2>/dev/null && break
    sleep 1
  done
fi

exec apache2-foreground
