FROM composer:1.9 as composer

WORKDIR /app
COPY ./composer.json /app
COPY ./composer.lock /app

RUN composer install --no-dev


FROM php:7.3-apache

RUN a2enmod rewrite
RUN pecl install APCu-5.1.17
RUN docker-php-ext-enable apcu

WORKDIR /var/www/html/
COPY ./ /var/www/html/
RUN mkdir -p ./tmp/compile/ && chmod -R 777 ./tmp/compile/
COPY --from=composer /app/vendor ./vendor
