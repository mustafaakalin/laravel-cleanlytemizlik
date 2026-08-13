FROM php:8.2-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
        git \
        curl \
        unzip \
        libzip-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libonig-dev \
        libxml2-dev \
        libicu-dev \
        libcurl4-openssl-dev \
        libsqlite3-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        pdo_mysql \
        pdo_sqlite \
        gd \
        zip \
        intl \
        mbstring \
        exif \
        bcmath \
        pcntl \
        opcache \
        mysqli \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
