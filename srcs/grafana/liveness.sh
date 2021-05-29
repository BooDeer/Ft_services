process=`ps | grep grafana|grep -v grep|wc -l`;

if [ $process -ge 1 ]
then exit 0
else exit 1
fi