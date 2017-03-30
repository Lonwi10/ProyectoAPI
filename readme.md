Laravel API

Instal·lació

Instal·lar Composer, Git i llibreries PHP

$ sudo apt-get install composer git php7.0 php7.0-mbstring php-sqlite3
Descarregar el repo i instal·lar dependències:

$ git clone https://github.com/Lonwi10/ProyectoAPI
$ cd ProyectoAPI
$ composer install
$ cp .env.example .env
$ php artisan key:generate
Modificar .env:

DB_CONNECTION=mysql
DB_DATABASE=LeagueOfLegends
DB_USERNAME=root
DB_PASSWORD=tucontraseña

Migrar la base de datos y poner en marcha:

$ php artisan migrate
$ php artisan db:seed
$ php artisan serve
