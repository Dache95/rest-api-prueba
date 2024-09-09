# Laravel REST API

Este es un backend desarrollado en Laravel 11 que implementa una API REST. Está diseñado para interactuar con una base de datos MySQL y ofrece endpoints para la gestión de solicitudes, asignaciones y usuarios.

## Requisitos

- **PHP 8.2+**
- **Laravel 11**
- **MySQL**
- **Composer**

## Configuración del entorno

1. Asegúrate de tener **MySQL** ejecutándose en tu entorno.
2. Crea una base de datos llamada `prueba-api`. Puedes cambiar el nombre de la base de datos en el archivo `.env`.

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/Dache95/rest-api-prueba.git

2. cd rest-api-prueba

3. npm install

4. npm run dev

## Migraciones y Seeders

1. Ejecuta las migraciones para crear las tablas en la base de datos:
    ```bash
    php artisan migrate

2. Ejecuta los seeders para poblar la base de datos con datos iniciales (esto ejecutará todos los seeders definidos en DatabaseSeeder.php):
    ```bash
    php artisan db:seed

## Servidor de desarrollo

1. Levanta el servidor de desarrollo con el siguiente comando:
    ```bash
    php artisan serve

## Despliegue
Este proyecto está desplegado en Railway. Tanto la API REST como la base de datos MySQL están alojadas en Railway.

- **URL de la API: https://rest-api-prueba-production.up.railway.app/**


