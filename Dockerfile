FROM php:7.2.1-apache
MAINTAINER Kari Thomas <kari@fantasypros.com>
RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite
COPY ./config/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/
EXPOSE 80
CMD ["apache2-foreground"]
