# About CryptoJobs
CryptoJobs is made with laravel 8 and vue js. <br/>

## Installations

<br />
## If you receive and error while installation below::

> run composer update instead of composer install
> also run php artisan key:generate

## 1. Set the basic config

> Edit example.env to .env <br />
> Put your db username and password here with DB_DATABASE=crypto_jobs. <br />
> ''' <br />

    DB_CONNECTION=mysql <br />
    DB_HOST=127.0.0.1 <br />
    DB_PORT=3306 <br />
    DB_DATABASE=crypto_jobs <br /> !important
    DB_USERNAME=root <br />
    DB_PASSWORD= <br />

'''
<br />

## 2. Install Dependencies

> ~composer install <br />
> ~npm install <br />
> ~npm run dev
> <br />

## 3. Migrate Database

> ~php artisan migrate:fresh <br />
> ~php artisan db:seed <br /> > <br />

## 4. Storage Symlink

> ~php artisan storage:link <br /> > <br />

## 5. Serve application

> ~php artisan serve <br />

