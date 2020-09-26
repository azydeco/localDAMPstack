
Looking inside the image. 

docker run --rm  php:7.4-fpm-alpine ls 
docker run --rm  php:7.4-fpm-alpine sh  <--> look inside

https://hub.docker.com/_/php?tab=description&page=1&name=7.4.0
https://developers.redhat.com/blog/2014/12/29/running-php-fpm-in-docker/
https://stackoverflow.com/questions/29905953/how-to-correctly-link-php-fpm-and-nginx-docker-containers
https://www.cloudreach.com/en/resources/blog/ct-apache-docker-containers/




/usr/local/etc/php-fpm.d # www.conf 
listen = 127.0.0.1:9000 .. 

Configuration
This image ships with the default php.ini-development and php.ini-production configuration files.

It is strongly recommended to use the production config for images used in production environments!

The default config can be customized by copying configuration files into the $PHP_INI_DIR/conf.d/ directory.

Example
FROM php:7.4-fpm-alpine

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
In many production environments, it is also recommended to (build and) enable the PHP core OPcache extension for performance. See the upstream OPcache documentation for more details



