<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca de este proyecto

Proyecto desarrollado para la materia de laboratorio de software, Universidad Tecnologica de Pereira Semestre I 2020, dictada por el profesor Cesar Jaramillo.

Este proyecto es un aplicativo web que tiene por objetivo proveer un servicio informativo y seguimiento de los egresados de la universidad. Hemos implementado el framework de Laravel. 

## Prerequisitos

Para poder poner en marcha este proyecto es necesario previamente contar con los siguientes elementos : 

- Php7.x 
- Composer ( [Sitio Web Oficial](https://getcomposer.org/))
- Motor de base de datos: **MariaDB** o **MySQL**
- Editor, recomendacion VSCode
- terminal o shell 

Para el desarrollo, se utilizo sistema operativo Debian version 10, Base de datos MySQL. todo el proyecto 
se desarrollo gracias a la [documentacion oficial](https://laravel.com/docs). 

## Puesta en Marcha
1. Clonamos el repo : 
    ```sh
    $ git clone https://github.com/EgresadosUTP/EgresadosUTP-egresadosExperimental-
    ```
2. Ingresamos a la carpeta y realizamos la instalacion de las dependencias con composer
    ```sh
    $ cd egresadosUTP 
    egresadosUTP$ composer install
    ```
3. Una vez tenemos las dependencias de Laravel instaladas, es necesario configurar nuestro archivo de entorno .env 
    ```sh
    egresadosUTP$ cp .env.example .env
    ```
4. Creamos nuestra base de datos y corremos la migraciones y cambios en la base de datos  
    ```sh
    egresadosUTP$ php artisa migrate
    ```
    Obtendras una salida como la siguiente : 
    ```sh
    Dropped all tables successfully.
    Migration table created successfully.
    Migrating: 2014_10_12_000000_create_users_table
    Migrated:  2014_10_12_000000_create_users_table (0.04 seconds)
    Migrating: 2019_08_19_000000_create_failed_jobs_table
    Migrated:  2019_08_19_000000_create_failed_jobs_table (0.02 seconds)
    Migrating: 2020_05_01_022346_create_noticias_table
    Migrated:  2020_05_01_022346_create_noticias_table (0.02 seconds)
    Migrating: 2020_05_01_022954_create_interes_table
    Migrated:  2020_05_01_022954_create_interes_table (0.02 seconds)
    Migrating: 2020_05_01_023350_create_egresos_table
    Migrated:  2020_05_01_023350_create_egresos_table (0.02 seconds)
    Migrating: 2020_05_01_030548_create_administradors_table
    Migrated:  2020_05_01_030548_create_administradors_table (0.04 seconds)
    Migrating: 2020_05_01_031934_create_super_usuario_table
    Migrated:  2020_05_01_031934_create_super_usuario_table (0.03 seconds)
    ```
5. Ejecutamos y ponemos a correr nuestro servidor localmente
    ```sh
    egresadosUTP$ php artisa serve 
    Laravel development server started: http://127.0.0.1:8000
    [Thu Apr 30 23:33:17 2020] PHP 7.4.5 Development Server (http://127.0.0.1:8000) started
    ```
## Rutas


| Method   | URI      | Name | Action  | Middleware   |
|---|---|---|---|---|
| GET|HEAD | /        |   Closure | web          |
| GET|HEAD | /api/user |  Closure | api,auth:api |
| GET|HEAD | /contact  |  Closure | web          |


## Miembros de Equipo 

- Juan Camilo Chavarro Acosta
- Diego Calvera Hernandez
- Melissa Escobar Gutierrez
- Eduar Jaramillo 

## Contribuciones

Para realizar aportes o contribuciones se implementa el [modelo](https://tighten.co/blog/adding-commits-to-a-pull-request/) de pull request.Todos los aportes son bienvenidos de personas 
ajenas a los miembros de equipo


## Licencia

Proyecto de software licenciado bajo licencia [MIT](https://opensource.org/licenses/MIT).
