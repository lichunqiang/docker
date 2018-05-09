ARG PHP_VERSION=7.1-fpm

FROM php:${PHP_VERSION}

ENV COMPOSER_HOME /root/composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV PATH $COMPOSER_HOME/vendor/bin:$PATH

RUN mkdir -p /var/log/php-fpm \
    && chown -R www-data:www-data /var/log/php-fpm/
