# Use an official PHP image with Apache
FROM php:8.2-apache

# Enable PHP extensions (like mysqli for MySQL)
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy your project into the container
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (default for Apache)
EXPOSE 80
