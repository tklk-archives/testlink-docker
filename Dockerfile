FROM alpine:3.9

RUN \
  apk add wget ca-certificates --update-cache && \
  wget -q -O - https://github.com/TestLinkOpenSourceTRMS/testlink-code/archive/1.9.19.tar.gz | tar zxf - && \
  mkdir -p /var && \
  mv testlink-* /var/testlink && \
  rm -rf testlink* && \
  chmod 777 -R /var/testlink/gui/templates_c && \
  mkdir -p /var/testlink/logs && \
  mkdir -p /var/testlink/upload_area && \
  chmod 777 -R /var/testlink/logs && \
  chmod 777 -R /var/testlink/upload_area

ADD *.php /var/testlink/

ENTRYPOINT tail -f /dev/null

VOLUME /var/testlink
