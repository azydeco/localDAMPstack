FROM php:7.4-fpm-alpine
RUN apk update; \
    apk upgrade;
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY ./php.ini-production /usr/local/etc/php/conf.d/php.ini