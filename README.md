## Manajemen Uang Kas Kelas

Web app simpel digunakan sebagai manajemen uang kas kelas.

-   Clone repository and enter the cloned directory

> git clone https://github.com/dimdimah/manajemen-kas.git

-   Install Dependency

> composer install && npm install

-   Setup Database

> buat database dengan nama `crud-filament`

-   Copy .env

> cp .env.example .env

-   Install Filament

> composer require filament/filament:"^3.0-stable" -W

-   Migrate and seed

> php artisan migrate:fresh --seed

-   Start Serve the application locally

> php artisan serve
