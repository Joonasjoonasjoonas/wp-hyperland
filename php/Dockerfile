FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    curl \
    git \
    unzip \
    mariadb-client

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Allow Composer to run as root in container
ENV COMPOSER_ALLOW_SUPERUSER=1