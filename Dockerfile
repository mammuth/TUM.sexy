FROM composer:1.6 as composer

WORKDIR /app
COPY ./composer.json /app
COPY ./composer.lock /app

RUN composer install --no-dev


FROM php:7.2-apache

RUN a2enmod rewrite
RUN pecl install APCu-5.1.8
RUN docker-php-ext-enable apcu

WORKDIR /var/www/html/
COPY ./ /var/www/html/
RUN mkdir -p ./tmp/compile/ && chmod -R 777 ./tmp/compile/
COPY --from=composer /app/vendor ./vendor
