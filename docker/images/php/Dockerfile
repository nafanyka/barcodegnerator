FROM php:8.2

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libmcrypt-dev \
        libonig-dev \
        libzip-dev \
        libpq-dev \
        unzip \
        libpng-dev \
        libfreetype6-dev \
        libjpeg-dev \
    && pecl install mcrypt \
    && docker-php-ext-enable mcrypt \
	&& docker-php-ext-configure gd --with-freetype \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) iconv bcmath mbstring zip

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD app /var/www
WORKDIR /var/www

CMD ["php", "artisan", "serve", "--port=80", "--host=0.0.0.0"]

#EXPOSE 8000
