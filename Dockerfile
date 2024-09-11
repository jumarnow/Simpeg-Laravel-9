# Use an official PHP runtime as a parent image
FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libssl-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd
RUN docker-php-ext-install bcmath

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install Node.js and NPM
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Copy existing application directory contents to the working directory
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Change ownership of the application directory
RUN chown -R www-data:www-data /var/www

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Install NPM dependencies
RUN npm install && npm run prod

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
