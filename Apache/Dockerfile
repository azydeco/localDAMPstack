FROM httpd:2.4
COPY ./ssl-certs/server.key /usr/local/apache2/conf/server.key
COPY ./ssl-certs/server.crt /usr/local/apache2/conf/server.crt
COPY ./httpd.conf   /usr/local/apache2/conf/httpd.conf
COPY ./httpd-vhosts.conf  /usr/local/apache2/conf/extra/httpd-vhosts.conf
COPY ./httpd-ssl.conf  /usr/local/apache2/conf/extra/httpd-ssl.conf
RUN  chown www-data:www-data /usr/local/apache2/conf/httpd.conf \
  && chown www-data:www-data  /usr/local/apache2/conf/extra/httpd-vhosts.conf
EXPOSE 8080
