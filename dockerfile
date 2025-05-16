FROM php:8.2-fpm

# Instalar dependencias del sistema incluyendo las necesarias para Node.js
RUN apt-get update && apt-get install -y \
    git unzip curl \
    libzip-dev zip \
    gnupg ca-certificates \
    && curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install zip pdo pdo_mysql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer directorio de trabajo
WORKDIR /var/www

# Copiar solo los archivos necesarios primero para aprovechar la caché de Docker
COPY package.json package-lock.json* ./
COPY composer.json composer.lock* ./

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Instalar dependencias de Node.js
RUN npm ci && npm cache clean --force

# Copiar el resto de los archivos
COPY . .

# Compilar assets con Vite
RUN npm run build

# Establecer permisos para Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exponer el puerto del servidor embebido
EXPOSE 8000

# Iniciar Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
