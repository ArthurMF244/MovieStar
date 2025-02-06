FROM php:8.3.10-apache

# Instala extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Habilita mod_rewrite do Apache (opcional, útil para .htaccess)
RUN a2enmod rewrite

# Reinicia o Apache para garantir que tudo funcione
CMD ["apache2-foreground"]
