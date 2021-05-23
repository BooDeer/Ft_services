FROM alpine:3.12

RUN apk add wget libc6-compat

RUN wget https://dl.grafana.com/enterprise/release/grafana-enterprise-7.4.5.linux-amd64.tar.gz && \
    tar -zxvf grafana-enterprise-7.4.5.linux-amd64.tar.gz
COPY setup-grafana.sh /
COPY grafana.db /grafana-7.4.5/data/

CMD ["sh", "/setup-grafana.sh"]
