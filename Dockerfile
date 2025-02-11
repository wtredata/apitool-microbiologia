# Usa la imagen base de PHP con las extensiones necesarias para Laravel
FROM php:8.0-apache

# Instala las dependencias necesarias de Laravel
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libzip-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    && docker-php-ext-install pdo_mysql zip gd

# Configura el directorio de trabajo y establece los permisos adecuados
WORKDIR /var/www/html

# Copia los archivos de tu aplicación Laravel al contenedor
COPY . /var/www/html

# Configurar el directorio public como el DocumentRoot de Apache
RUN sed -i -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Habilitar el módulo mod_rewrite de Apache
RUN a2enmod rewrite

# Reiniciar el servicio de Apache
RUN service apache2 restart

#RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 777 /var/www/html

RUN chmod -R 777 /var/www/html/storage
#RUN chown -R www-data:www-data /var/www/html/storage/logs/

# Instala las dependencias de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias de la aplicación Laravel
# RUN composer install --no-interaction --optimize-autoloader

# Expone el puerto 80 para acceder a la aplicación
EXPOSE 80

# Ejecuta el servidor Apache en segundo plano
CMD ["apache2-foreground"]
