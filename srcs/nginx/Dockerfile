FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add nginx vim openssl openssh
RUN apk add openrc --no-cache && apk add sudo
COPY default.conf /etc/nginx/conf.d/
COPY setup_nginx.sh /
#RUN mkdir /run/nginx
RUN mkdir -p /www/nginx/
RUN echo "<h1>Hello world!</h1>" > /www/index.html 
RUN openssl req -x509 -nodes -days 365 -subj "/C=CA/ST=QC/O=Company, Inc./CN=mydomain.com" -addext "subjectAltName=DNS:mydomain.com" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
CMD ["sh", "/setup_nginx.sh"]
