FROM php:8.2-fpm
RUN docker-php-ext-install mysqli pdo_mysql
COPY custom.ini /usr/local/etc/php/conf.d/custom.ini