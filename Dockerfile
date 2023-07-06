FROM composer:1.9 as composer

WORKDIR /app
COPY ./composer.json /app
COPY ./composer.lock /app

RUN composer install --no-dev


FROM php:8.2-apache
RUN a2enmod rewrite

WORKDIR /var/www/html/
COPY ./ /var/www/html/
RUN mkdir -p ./tmp/compile/ && chmod -R 777 ./tmp/compile/
COPY --from=composer /app/vendor ./vendor
