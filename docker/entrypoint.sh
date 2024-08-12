#!/usr/bin/env ash

/usr/bin/php artisan optimize:clear && \
/usr/bin/php artisan optimize && \
/usr/bin/php artisan serve --host=0.0.0.0 --port=8000
