FROM php:8.2

RUN apt-get update && apt-get install -y \
        curl \
        aptitude \
        wget \
        net-tools \
        git \
        libmcrypt-dev \
        libonig-dev \
        libzip-dev \
        libpq-dev \
        unzip \
        supervisor \
        net-tools \
        openssl \
        libpng-dev \
        libfreetype6-dev \
        libjpeg-dev \
        imagemagick \
        libmagickwand-dev \
    && pecl install mcrypt \
    && docker-php-ext-enable mcrypt \
	&& docker-php-ext-configure gd --with-freetype \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) iconv bcmath mbstring zip

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

CMD ["php", "-S", "localhost:8000"]

#EXPOSE 8000
