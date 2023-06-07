FROM httpd:2.4
RUN mkdir -p /usr/local/apache2/conf/extra/vhosts  \
  && mkdir -p /usr/local/apache2/conf/ssl-certs  
COPY ./ssl-certs/server.key /usr/local/apache2/conf/server.key
COPY ./ssl-certs/server.crt /usr/local/apache2/conf/server.crt
COPY ./ssl-certs/* /usr/local/apache2/conf/ssl-certs/.
COPY ./httpd.conf   /usr/local/apache2/conf/httpd.conf
COPY ./httpd-vhosts.conf  /usr/local/apache2/conf/extra/httpd-vhosts.conf
COPY ./httpd-ssl.conf  /usr/local/apache2/conf/extra/httpd-ssl.conf
COPY ./vhosts/*.conf  /usr/local/apache2/conf/extra/vhosts/.
RUN  chown www-data:www-data /usr/local/apache2/conf/httpd.conf \
  && chown www-data:www-data  /usr/local/apache2/conf/extra/httpd-vhosts.conf  \
  && chown www-data:www-data  /usr/local/apache2/conf/extra/vhosts/*.conf  \
  && chown www-data:www-data /usr/local/apache2/conf/ssl-certs \
  && chown www-data:www-data /usr/local/apache2/conf/extra/vhosts
EXPOSE 8080 443
