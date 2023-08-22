FROM php:8.2.2-fpm-alpine3.17
RUN apk update; \
    apk upgrade;
RUN apk add --update linux-headers
RUN apk add \
        libzip-dev \
        zip \
  && docker-php-ext-install zip
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY ./php.ini-production.ini /usr/local/etc/php/php.ini
COPY ./error_reporting.ini /usr/local/etc/php/conf.d/error_reporting.ini
COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug