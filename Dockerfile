FROM php:8.1-apache
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mysqli && docker-php-ext-enable pdo pdo_mysql pdo_pgsql mysqli
RUN apt-get update && apt-get upgrade -y