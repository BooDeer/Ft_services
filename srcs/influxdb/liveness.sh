process=`ps | grep -E "influxd|telegraf"|grep -v grep|wc -l`;

if [ $process -ge 3 ]
then exit 0
else exit 1
fi