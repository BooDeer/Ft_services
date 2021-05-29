FROM alpine:3.12

RUN apk update && apk add nginx && apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl \
    && apk add php7-fpm php7-mcrypt php7-soap php7-session php7-openssl php7-gmp php7-pdo_odbc php7-json php7-dom php7-pdo php7-zip php7-mysqli php7-sqlite3 php7-apcu php7-pdo_pgsql php7-bcmath php7-gd php7-odbc php7-pdo_mysql php7-pdo_sqlite php7-gettext php7-xmlreader php7-xmlrpc php7-bz2 php7-iconv php7-pdo_dblib php7-curl php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip \
    && apk add sudo && apk add bash \
    && apk add openrc --no-cache && apk add libc6-compat

RUN apk add nginx vim openssl openssh
RUN apk add openrc --no-cache && apk add sudo
COPY default.conf /etc/nginx/conf.d/
COPY setup_nginx.sh /
#RUN mkdir /run/nginx
RUN mkdir -p /www/wordpress/
RUN cd /tmp/
ADD https://wordpress.org/latest.tar.gz /
RUN tar xzvf latest.tar.gz
RUN rm -rf latest.tar.gz
COPY wp-config.php /www/wordpress
RUN mv wordpress/ /www/wordpress
RUN echo "<h1>Hello world!</h1>" > /www/index.html 
#RUN openssl req -x509 -nodes -days 365 -subj "/C=CA/ST=QC/O=Company, Inc./CN=mydomain.com" -addext "subjectAltName=DNS:mydomain.com" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
COPY liveness.sh /
CMD ["sh", "/setup_nginx.sh"]
