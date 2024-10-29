FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html/project-1

COPY . .

RUN chown -R www-data:www-data /var/www/html/project-1/storage /var/www/html/project-1/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]