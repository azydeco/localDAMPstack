FROM httpd:2.4
COPY ./httpd.conf   /usr/local/apache2/conf/httpd.conf
COPY ./httpd-vhosts.conf  /usr/local/apache2/conf/extra/httpd-vhosts.conf
RUN  chown www-data:www-data /usr/local/apache2/conf/httpd.conf \
  && chown www-data:www-data  /usr/local/apache2/conf/extra/httpd-vhosts.conf
EXPOSE 8080
