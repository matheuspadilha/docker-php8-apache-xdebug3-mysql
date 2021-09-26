FROM php:8.0.10-apache

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Install XDEBUG version latest
RUN pecl install xdebug

# Copy conf php.ini
COPY php/php-adicional.ini /usr/local/etc/php/conf.d/php-adicional.ini

RUN usermod -u 1000 www-data