FROM alpine:3.3

RUN \
  mkdir -p /var/testlink/upload_area && \
  mkdir -p /var/testlink/logs && \
  chmod -R 777 /var/testlink

CMD tail -f /dev/null

VOLUME /var/testlink/upload_area /var/testlink/logs