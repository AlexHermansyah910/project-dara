# Gunakan image bitnami/laravel dengan PHP versi yang sesuai
FROM bitnami/laravel:latest

# Install dependencies tambahan yang diperlukan
USER root
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Salin file aplikasi Laravel ke dalam container
COPY . .

# Buat file .env dari .env.example jika belum ada
RUN if [ ! -f .env ]; then cp .env.example .env; fi

ENV LARAVEL_DATABASE_TYPE=mysql
ENV LARAVEL_DATABASE_HOST=dbdonordarah
ENV LARAVEL_DATABASE_PORT=3306
ENV LARAVEL_DATABASE_NAME=dbdonordarah
ENV LARAVEL_DATABASE_USER=root
ENV LARAVEL_DATABASE_PASSWORD=12345678


# Perbarui dependensi untuk memastikan kompatibilitas dengan PHP versi image
RUN composer update

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Generate key Laravel
RUN php artisan key:generate

# Set permissions
RUN chown -R bitnami:bitnami /app \
    && chmod -R 755 /app/storage

# Expose port
EXPOSE 8000
# Jalankan server Laravel
CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]
