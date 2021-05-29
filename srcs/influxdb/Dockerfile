
FROM alpine:3.12
# TELEGRAPH
ENV TELEGRAF_V 1.18.0
ADD https://dl.influxdata.com/telegraf/releases/telegraf-${TELEGRAF_V}_linux_amd64.tar.gz ./
RUN tar xf telegraf-${TELEGRAF_V}_linux_amd64.tar.gz && \
        chmod +x telegraf-1.18.0/* && \
        cp /telegraf-1.18.0/usr/bin/telegraf /usr/bin/ && \
        rm -rf *.tar.gz* telegraf-1.18.0/

# INFLUXDB
RUN apk add influxdb libc6-compat
#CONF FILES
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf
#COPY /src/influxdb.conf /etc
RUN apk add openrc

COPY liveness.sh /
COPY setup-influxdb.sh /
CMD ["sh", "/setup-influxdb.sh"]
