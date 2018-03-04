FROM composer:1.6.3 as composer

WORKDIR /app
COPY ./ /app

RUN composer install


FROM php:7.2.2-apache

RUN a2enmod rewrite

WORKDIR /var/www/html/
COPY ./ /var/www/html/

COPY --from=composer /app/vendor ./vendor
