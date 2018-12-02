FROM php:7.2-fpm
RUN apt-get update \
    && apt-get install -y \
    git \
    openssl \
    libssl-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring \
    && usermod -u 1000 www-data \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer \
    && apt-get clean && apt-get purge

RUN apt-get update \
	&& apt-get install -y \
	libssh2-1-dev

RUN apt-get update \
	&& apt-get install -y \
	libssl-dev \
	&& docker-php-ext-install -j$(nproc) \
		ftp

RUN apt-get update \
	&& apt-get install -y \
	libbz2-dev \
	zlib1g-dev \
	&& docker-php-ext-install -j$(nproc) \
		zip \
		bz2