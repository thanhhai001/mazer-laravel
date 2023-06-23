# mazer-laravel
- admin dashboard mazer template with laravel
- auth with laravel UI boostrap
- pages customize the mazer template

# start build command
  // Create project
- composer create-project laravel/laravel dashboard-manager
  // Require laravel/ui
- cd /dashboard-manager && composer require laravel/ui
  // Generate login / registration scaffolding...
- php artisan ui bootstrap --auth
  // Insatll library
- npm instal && npm install vite

# clone to install command
1. cd /dashboard-manager
2. run **npm install**
3. run **composer install**
4. run **php artisan key:generate**
5. copy **.env.example** && renmame to **.env**
7. run **php artisan migrate**
8. run **php artisan serve** or **php artisan ser** (default-port:8000), can custom port with **php artisan serve --port={port_number}**
