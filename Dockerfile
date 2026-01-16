FROM php:8.1-apache

# تثبيت PDO MySQL driver
RUN docker-php-ext-install pdo pdo_mysql

# تفعيل rewrite 
RUN a2enmod rewrite
