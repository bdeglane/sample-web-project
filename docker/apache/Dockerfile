FROM php:7.0-apache
RUN apt-get update \
	&& apt-get install -y zlib1g-dev \
	&& apt-get install -y libpq-dev \
    && docker-php-ext-install zip \
	&& apt-get install -y libssl-dev \
	&& docker-php-ext-install pdo pdo_pgsql \
	&& apt-get install -y git

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer
RUN composer --version

#xdebug
RUN pecl install xdebug-2.5.3
RUN docker-php-ext-enable xdebug

# build apache
COPY ./vhost/001-back.conf /etc/apache2/sites-available/001-back.conf

RUN a2enmod headers
RUN a2ensite 001-back
RUN a2enmod rewrite
RUN a2enmod proxy_http
RUN a2dissite 000-default

# alias
RUN echo 'alias ll="ls -al"' >> ~/.bashrc
RUN echo 'alias vh="cat /etc/apache2/sites-available/001-back.conf"' >> ~/.bashrc
RUN echo 'alias r="php /var/www/html/back/bin/console debug:router"' >> ~/.bashrc
RUN echo 'alias P="php /var/www/html/back/bin/console"' >> ~/.bashrc

