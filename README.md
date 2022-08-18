# SFI Employee Directory



## Requirements

* PHP 8.0 or latest
* Node 14 or latest

## How to start 
<b>To use roles & permissions: select the branch "Branch_with_roles_permissions"</b>

Clone the repo https://github.com/sunnytechie/sfihomes.git
```bash
$ cp .env.example .env # setup your database
$ composer install
$ php artisan key:gen
$ npm install
$ npm run dev # optional only if any changes you make in resource/js
$ php artisan migrate --seed
$ php artisan serve
```

## Compile Assets

```bash
$ npm run dev
```

or

```bash
$ npm run watch
```
