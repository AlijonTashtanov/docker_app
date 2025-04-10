## 1. Setup

- Set up your Linux OS(Ubuntu)
- Install Docker
- Clone the repository
- We are using Laravel Sail, First you need to install Laravel Sail by running 

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install
```

- `cp .env.example .env`
- You can create an alias for `./vendor/bin/sail` - sail`
- Run `./vendor/bin/sail up`
- Run `./vendor/bin/sail artisan key:generate`
- Run `./vendor/bin/sail artisan migrate`
- Run `./vendor/bin/sail artisan db:seed`
- Run `./vendor/bin/sail npm install`
- Run `./vendor/bin/sail npm run dev`
- Open the browser and navigate to `http://localhost`
