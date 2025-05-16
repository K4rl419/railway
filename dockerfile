    FROM php:8.2-fpm

# 1. Instalar dependencias básicas
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    git unzip curl libzip-dev ca-certificates && \
    rm -rf /var/lib/apt/lists/*

# 2. Instalar Node.js (alternativa con garantía)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm@latest

# 3. Instalar extensiones PHP
RUN docker-php-ext-install zip pdo pdo_mysql mbstring xml tokenizer pcntl

# 4. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Resto de tu Dockerfile original...
WORKDIR /var/www
COPY . .
RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN npm install && npm run build
