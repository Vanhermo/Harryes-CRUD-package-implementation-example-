# Harryes-CRUD-package-implementation-example-

Es un paquete para crear de manera automatica operaciones CRUD. Inlcuye models, migrations, controllers, resources y routes.

# Requisitos
Para poder ocupar este paquete, debemos tener un proyecto funcional con Laravel, PHP y Composer instalados y funcionando. 

# Instalación
1. Para instalar: composer require harryes/crudpackage
2. Generación de operaciones CRUD para un modelo: php artisan crud:generate ModelName --columns=name:string,email:string,age:integer
3. Modificadores de columnas:
   * Add ? after the type to make the column nullable. Example: email:string?.
   * Add * after the type followed by a value to set a default value. Example: active:boolean*true.

# Ejemplo de comandos
* CRUD para un modelo con columnas dinamicas: php artisan crud:generate SocialUser --columns=name:string,address:string?,phone:string,email:string
* CRUD para un modelo sin columnas dinamicas: php artisan crud:generate SocialUser

> [!IMPORTANT]
Agregar las siguientes lineas

* En bootstrap/app
```
->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php', // linea agregada 
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
```

y en routes/api donde se genero la ruta es posible que falte agregar al inicio

```
<?php
```
# Video demostrativo 
* Link: https://youtu.be/A8GSK_fQs8Q
