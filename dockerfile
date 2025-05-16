FROM php:8.2-fpm

# 1. Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip nodejs npm \
    && docker-php-ext-install zip pdo pdo_mysql \
    && ln -s /usr/bin/nodejs /usr/bin/node

# 2. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Establecer directorio de trabajo
WORKDIR /var/www

# 4. Copiar los archivos del proyecto
COPY . .

# 5. Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# 6. Instalar dependencias de Node (Vite + Tailwind)
RUN npm install

# 7. Compilar assets con Vite
RUN npm run build

# 8. Establecer permisos para Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# 9. Exponer el puerto
EXPOSE 8000

# 10. Iniciar el servidor Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
