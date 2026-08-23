FROM php:8.2-apache

EXPOSE 80

COPY ./ /var/www/html

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html