
## How to run the App

1. `git clone https://github.com/preduseldavid/record-management.git`
2. `cd record-management`
3. Install composer dependencies
```
   docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
   ```
4. `./vendor/bin/sail up`
5. `./vendor/bin/sail shell`
6. `composer run post-root-package-install`
7. `composer run post-create-project-cmd`
8. `php artisan migrate`
9. ENJOY
