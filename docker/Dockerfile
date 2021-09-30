FROM php:8.0.10-apache

# Enabled rewrite apache
RUN a2enmod rewrite;

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Install XDEBUG version latest
RUN pecl install xdebug

# Copy config php.ini
COPY php/php-additional.ini /usr/local/etc/php/conf.d/php-additional.ini

RUN usermod -u 1000 www-data
