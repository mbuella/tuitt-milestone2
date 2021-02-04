FROM tugboatqa/php:5.6-apache

# PHP Extensions
RUN docker-php-ext-install mysqli

RUN a2enmod headers rewrite

# Environment vars
ENV MYSQL_URL="mysql://tugboat:tugboat@mysql:3306/tugboat"