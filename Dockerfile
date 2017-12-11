FROM php:7.1-apache

RUN apt-get update \
 && apt-get install -y git curl libpq-dev libmemcached-dev zlib1g-dev libxml2-dev \
 && docker-php-ext-install zip pdo pdo_mysql soap \
 && apt-get clean \
 && rm -rf /var/lib/apt/lists/* \
 && a2enmod rewrite \
 && curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer

# Install Memcached for php 7
RUN curl -L -o /tmp/memcached.tar.gz "https://github.com/php-memcached-dev/php-memcached/archive/php7.tar.gz" \
    && mkdir -p /usr/src/php/ext/memcached \
    && tar -C /usr/src/php/ext/memcached -zxvf /tmp/memcached.tar.gz --strip 1 \
    && docker-php-ext-configure memcached \
    && docker-php-ext-install memcached \
    && rm /tmp/memcached.tar.gz
