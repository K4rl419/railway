FROM php:8.2-fpm

# 1. Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest \
    && docker-php-ext-install zip pdo pdo_mysql mbstring xml tokenizer pcntl

# 2. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Configurar directorio y permisos
WORKDIR /var/www
RUN chown -R www-data:www-data /var/www

# 4. Copiar archivos con permisos correctos
COPY --chown=www-data:www-data . .

# 5. Instalar dependencias PHP
USER www-data
RUN composer clear-cache && \
    composer install --no-dev --optimize-autoloader --no-interaction

# 6. Instalar dependencias JS y compilar
RUN npm install && npm run build

# 7. Configurar Laravel
RUN cp .env.example .env && \
    php artisan key:generate && \
    chmod -R 775 storage bootstrap/cache

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
