FROM php:7.4.5-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY docRoot/ /var/www/html/
EXPOSE 80
