#/bin/sh

php artisan route:cache && php artisan config:cache && php artisan config:clear && php artisan cache:clear
