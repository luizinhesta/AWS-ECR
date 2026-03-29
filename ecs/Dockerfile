FROM php:8.2-apache

# Instala extensão do MySQL
RUN docker-php-ext-install mysqli

# Copia projeto
COPY . /var/www/html/

# Permissões
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80