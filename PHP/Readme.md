
Looking inside the image. 

docker run --rm  php:7.4-fpm-alpine ls 
docker run --rm  php:7.4-fpm-alpine sh  <--> look inside

https://hub.docker.com/_/php?tab=description&page=1&name=7.4.0
https://developers.redhat.com/blog/2014/12/29/running-php-fpm-in-docker/
https://stackoverflow.com/questions/29905953/how-to-correctly-link-php-fpm-and-nginx-docker-containers
https://www.cloudreach.com/en/resources/blog/ct-apache-docker-containers/




/usr/local/etc/php-fpm.d # www.conf 
listen = 127.0.0.1:9000 .. 



