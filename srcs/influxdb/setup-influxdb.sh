mkdir /var/run/utmp
nohup influxd run &
influx -execute "create database telegraf"
influx -execute "CREATE USER admin WITH PASSWORD 'admin' WITH ALL PRIVILEGES"
telegraf
tail -f /dev/null