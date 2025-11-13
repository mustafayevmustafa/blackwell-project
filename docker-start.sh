#!/bin/bash

echo "Starting Laravel Docker containers..."

# Build and start containers
docker-compose up -d --build

echo "Waiting for containers to be ready..."
sleep 5

echo "Installing Composer dependencies..."
docker-compose exec app composer install

echo "Generating application key..."
docker-compose exec app php artisan key:generate

echo "Running migrations..."
docker-compose exec app php artisan migrate --force

echo "Clearing and caching config..."
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache

echo "Setting permissions..."
docker-compose exec app chown -R www-data:www-data /var/www/html/storage
docker-compose exec app chown -R www-data:www-data /var/www/html/bootstrap/cache

echo ""
echo "=========================================="
echo "Laravel application is ready!"
echo "=========================================="
echo "Application URL: http://localhost:8080"
echo "MySQL Port: 3306"
echo "Redis Port: 6379"
echo ""
echo "Database credentials:"
echo "  Database: laravel"
echo "  Username: laravel"
echo "  Password: laravel"
echo "=========================================="