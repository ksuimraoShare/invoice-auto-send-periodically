FROM php:8.1.6-fpm

COPY --from=composer:1.10.12 /usr/bin/composer /usr/bin/composer
COPY php.ini /usr/local/etc/php/

RUN apt-get update \
    && apt-get install -y zip unzip \
    && apt-get install -y vim \
    && apt-get install -y nodejs npm \
    && apt-get install -y libicu-dev

RUN composer self-update --2

RUN docker-php-ext-install pdo pdo_mysql intl
