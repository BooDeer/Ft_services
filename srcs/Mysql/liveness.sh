process=`ps | grep "mysql"|grep -v grep|wc -l`;

if [ $process -ge 2 ]
then exit 0
else exit 1
fi