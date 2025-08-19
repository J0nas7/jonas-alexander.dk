FROM php:8.2-apache

# Enable Apache mod_rewrite (needed for WordPress permalinks)
RUN a2enmod rewrite

# Install SQLite extension and dependencies
RUN apt-get update \
    && apt-get install -y libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

# Copy your WordPress site into Apache's web root
COPY wordpress/ /var/www/html/

# Set correct permissions for WordPress
RUN chown -R www-data:www-data /var/www/html

# Apache on Scaleway listens on 8080 instead of 80
EXPOSE 8080
RUN sed -i 's/80/8080/' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf
