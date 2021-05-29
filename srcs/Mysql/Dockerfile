FROM alpine:3.12

RUN apk add openrc mariadb mariadb-common mariadb-client
COPY src/mariadb-server.cnf /etc/my.cnf.d

COPY setup_mysql.sh /

COPY src/create_tables.sql /
COPY src/wp_db.sql /

COPY liveness.sh /
RUN chmod +x setup_mysql.sh
CMD ["sh", "/setup_mysql.sh"]