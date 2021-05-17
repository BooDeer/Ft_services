
openrc reboot && /etc/init.d/mariadb setup
rc-service mariadb start
chown -R mysql: /var/lib/mysql
echo "CREATE DATABASE wp_db;" | mysql -u root
echo "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' IDENTIFIED BY 'admin';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wp_db.* TO 'admin'@'%' IDENTIFIED BY 'admin';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

mariadb < create_tables.sql
mariadb < wp_db.sql

tail -f /dev/null