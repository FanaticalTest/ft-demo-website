FROM php:7.0-apache
ENV SQL_SERVER=192.168.0.145
ENV SQL_DB=ftdemowebsite
ENV SQL_USER=ftdemowebsite
ENV SQL_PASSWORD=ftdemowebsite
ENV SQL_PORT=3306
ENV API_SERVER=192.168.0.145
ENV API_PORT=80
COPY config/php.ini /usr/local/etc/php/
COPY src/ /var/www/html/
RUN docker-php-ext-install mysqli
EXPOSE 80