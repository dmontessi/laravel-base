# How to use

- Clone the GitHub repository
```
git clone https://github.com/dmontessi/laravel-base.git
```
- Install Composer Dependencies
```
composer install
```
- Install NPM Dependencies
```
npm install
npm run dev
```
- Create your copy of the .env file
```
cp .env.example .env
```
- Generate an App Encryption Key
```
php artisan key:generate
```
- Create an empty database for our application
- Configure the .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-base
DB_USERNAME=root
DB_PASSWORD=
```
- Migrate the database
```
php artisan migrate
```
- Open the application
```
http://localhost/laravel-base/public/
```