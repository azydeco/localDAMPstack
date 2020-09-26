FROM php:7.4-fpm-alpine
RUN apk update; \
    apk upgrade;
RUN apk add \
        libzip-dev \
        zip \
  && docker-php-ext-install zip
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN "ln -s /usr/bin/zip /usr/local/bin/."
RUN "ln -s /usr/bin/unzip /usr/local/bin/."
COPY ./php.ini-production.ini /usr/local/etc/php/php.ini