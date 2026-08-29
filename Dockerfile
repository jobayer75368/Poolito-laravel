FROM php:8.3-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    xml \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

COPY ca.pem /etc/ssl/certs/aiven-ca.pem

RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

EXPOSE 10000

CMD ["sh", "-c", "echo \"HOST=[$DB_HOST]\" && echo -n \"$DB_HOST\" | wc -c && php -r 'var_dump(gethostbyname(getenv(\"DB_HOST\")));' && php -r 'var_dump(gethostbyname(\"google.com\"));' && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]