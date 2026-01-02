web: php artisan octane:start --server=roadrunner --host=0.0.0.0 --port=$PORT || php artisan serve --host=0.0.0.0 --port=$PORT
release: php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache
