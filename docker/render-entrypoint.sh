#!/bin/bash
set -e

PORT="${PORT:-80}"
DB_PASSWORD="${DB_PASSWORD:-fanbanna}"

sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf

if [ ! -d /var/lib/mysql/mysql ]; then
  mariadb-install-db --user=mysql --datadir=/var/lib/mysql >/dev/null
fi

service mariadb start

for i in $(seq 1 30); do
  if mariadb-admin ping --silent 2>/dev/null; then
    break
  fi
  sleep 1
done

mariadb -u root <<EOSQL
ALTER USER 'root'@'localhost' IDENTIFIED BY '${DB_PASSWORD}';
CREATE DATABASE IF NOT EXISTS registration;
EOSQL

mariadb -u root -p"${DB_PASSWORD}" registration < /var/www/html/schema.sql

export DB_SERVER=127.0.0.1
export DB_USERNAME=root
export DB_DATABASE=registration

exec apache2-foreground
