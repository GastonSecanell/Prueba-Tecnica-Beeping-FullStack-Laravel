<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

##  Instrucciones de Uso:

### Instalación:
Clona el repositorio desde GitHub rama develop.

Antes de continuar tener en cuenta que este proyecto está desarrollado en Laravel 10, por lo que se recomienda tener **"php": "^8.2"**  y tambien contar con la ultima version de **Composer** en tu S.O.

Abre una terminal en la raíz del proyecto y ejecuta el siguiente comando para instalar las dependencias:
```bash
$ composer install 
```

Configura el archivo **.env** con la información de tu base de datos y ajusta los demás parámetros según tu entorno utilizando como ejemplo el **.env.example**.

### Migraciones y Semillas:
Ejecuta: 

```bash
$ php artisan migrate --seed
```
para crear las tablas en la base de datos y a la vez se insertan registros en las tablas **orders, orders_lines, products y executed**, los registros se generan segun la cantidad que solicitaron en la tarea por factories.

### Inicio del Servidor:
Ejecuta el siguiente comando para iniciar el servidor local.

```bash
$ php artisan serve
```


- [Mi Linkedin](https://linkedin.com/in/gaston-secanell-126bb4260).
- [Mi email personal](mailto:gastonsecanell@gmail.com).