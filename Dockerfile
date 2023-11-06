FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql

ADD ./crud_pdo /var/www/html

EXPOSE 3002

CMD ["php", "-S", "0.0.0.0:3002"]


