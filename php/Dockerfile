FROM alpine:3.3

ENV TIMEZONE UTC
ENV PHP_MEMORY_LIMIT 512M
ENV MAX_UPLOAD 50M
ENV PHP_MAX_FILE_UPLOAD 200
ENV PHP_MAX_POST 100M

RUN apk update && apk upgrade && \
    apk add --update tzdata ssmtp && \
    cp /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && \
    echo "${TIMEZONE}" > /etc/timezone && \
    apk add --update \
        php-mcrypt \
        php-soap \
        php-openssl \
        php-gmp \
        php-pdo_odbc \
        php-json \
        php-dom \
        php-pdo \
        php-zip \
        php-mysql \
        php-sqlite3 \
        php-apcu \
        php-pdo_pgsql \
        php-bcmath \
        php-gd \
        php-xcache \
        php-odbc \
        php-pdo_mysql \
        php-pdo_sqlite \
        php-pgsql \
        php-gettext \
        php-xmlreader \
        php-xmlrpc \
        php-ldap \
        php-bz2 \
        php-memcache \
        php-mssql \
        php-iconv \
        php-pdo_dblib \
        php-curl \
        php-ctype \
        php-fpm && \
    sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php/php-fpm.conf && \
    sed -i -e "s/listen\s*=\s*127.0.0.1:9000/listen = 9000/g" /etc/php/php-fpm.conf && \
    sed -i "s|;date.timezone =.*|date.timezone = ${TIMEZONE}|" /etc/php/php.ini && \
    sed -i "s|memory_limit =.*|memory_limit = ${PHP_MEMORY_LIMIT}|" /etc/php/php.ini && \
    sed -i "s|upload_max_filesize =.*|upload_max_filesize = ${MAX_UPLOAD}|" /etc/php/php.ini && \
    sed -i "s|max_file_uploads =.*|max_file_uploads = ${PHP_MAX_FILE_UPLOAD}|" /etc/php/php.ini && \
    sed -i "s|post_max_size =.*|max_file_uploads = ${PHP_MAX_POST}|" /etc/php/php.ini && \
    sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/php.ini && \
    echo "FromLineOverride=YES" >> /etc/ssmtp/ssmtp.conf && \
    echo 'sendmail_path = "/usr/sbin/ssmtp -t"' >> /etc/php/php.ini && \
    apk del tzdata && \
    rm -rf /var/cache/apk/*

# Expose ports
EXPOSE 9000

# Entry point
ENTRYPOINT ["/usr/bin/php-fpm"]