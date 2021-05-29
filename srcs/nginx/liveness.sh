process=`ps | grep -E "nginx: master| sshd: /usr/sbin/sshd"|grep -v grep|wc -l`;

if [ $process -ge 2 ]
then exit 0
else exit 1
fi