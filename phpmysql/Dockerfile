FROM php:8.0-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN apt-get update && apt-get upgrade -y
RUN a2enmod rewrite
#Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/
COPY ./src /var/www/html/