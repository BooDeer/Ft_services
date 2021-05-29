FROM alpine:3.12

RUN apk add vsftpd openssl openrc
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=MA/ST=rhamna/L=Bengruir/O=1337/CN=vsftpd' -keyout /etc/vsftpd/vsftpd.key -out /etc/vsftpd/vsftpd.crt
COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
RUN mkdir -p /home/admin
RUN adduser admin -D && echo "admin:admin" |chpasswd
RUN chmod 750 /home/admin && chown -R admin: /home/admin
COPY setup_ftps.sh /
RUN chmod +x setup_ftps.sh
COPY liveness.sh /
CMD ["sh", "/setup_ftps.sh"]
