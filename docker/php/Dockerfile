FROM php:7.2-fpm-stretch

RUN apt-get update \
 && apt-get install -y \
    git \
    gnupg2 \
    libicu-dev \
    mysql-client \
    zip \
    unzip

RUN curl -sL https://getcomposer.org/installer | php \
 && mv composer.phar /usr/local/bin/composer \
 && curl -sL https://get.symfony.com/cli/installer | bash - \
 && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN docker-php-ext-configure intl \
 && docker-php-ext-install intl \
 && docker-php-ext-install pdo_mysql

WORKDIR /var/www/app

COPY . /var/www/app

EXPOSE 9000
