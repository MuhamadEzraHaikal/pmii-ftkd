#!/bin/bash
set -e

# Run migrations if we have DB connection
if [ ! -z "$DB_HOST" ]; then
    echo "Running database migrations..."
    php artisan migrate --force
fi

# Link storage if not linked
if [ ! -d "public/storage" ]; then
    echo "Linking storage..."
    php artisan storage:link
fi

# Start Apache in the foreground
echo "Starting Apache..."
apache2-foreground
