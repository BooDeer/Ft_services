openrc reboot
rc-service nginx start
rc-service php-fpm7 start

tail -f dev/null