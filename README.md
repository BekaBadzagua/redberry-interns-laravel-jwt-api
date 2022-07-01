# JWT - Laravel API

I created this application as a guideline for Redberry interns.

There is also [Vue3 application](https://github.com/BekaBadzagua/redberry-interns-vue-jwt) Which serves as a SPA Application for this project. In this App, I have implemented Laravel JWT Authentication endpoints using [jwt-auth Package](https://laravel-jwt-auth.readthedocs.io/en/latest/auth-guard/).

## Table of Contents

* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Recourses](#resources)




<h2 id="tech-stack">Tech Stack:</h2>

- php     - ^8.0.2
- laravel - ^9.19
- php-open-source-saver/jwt-auth - ^1.4

<h2 id="getting-started">Getting Started:</h2>

1\. Clone repository from github:
```sh
git clone https://github.com/BekaBadzagua/redberry-interns-laravel-jwt-api
```

```sh
cd redberry-interns-laravel-jwt-api
```


2\. Install all the dependencies.
```sh
composer install
```
```sh
npm install
```
```sh
npm run dev
```

3\. Set env file.
```sh
cp .env.example .env
```

4\. Generate application key and link the storage:
```sh
php artisan key:generate
```

```sh
php artisan storage:link
```

5\. generate JWT_SECRET
```sh
php artisan jwt:secret
```

6\. You're Ready to go
```
php artisan serve
```



<h2 id="ccccccccccccc">Resources:</h2>

- Vue Router Guards - https://router.vuejs.org/guide/advanced/navigation-guards.html#per-route-guard
- jwt-auth - https://laravel-jwt-auth.readthedocs.io/en/latest/)

