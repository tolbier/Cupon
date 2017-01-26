NOTAS DE SYMFONY2
=================

Instalación
-----------
###Composer
[Download Composer](https://getcomposer.org/download/)


###SYMFONY
```bash
sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
sudo chmod a+x /usr/local/bin/symfony
```

####Crear Aplicación Symfony

$ symfony new cupon 2.8 //especificar versión
$ symfony new cupon //última version

###Actualizar Aplicación
~/symfonyapp/$ composer update

###Comprobar instalación
~/symfonyapp/$ php app/check.php

###Ejecutar Servidor
~/symfonyapp/$ php app/console server:run

###Generar getters y setters de Doctrine
php app/console generate:doctrine:entities AppBundle

###Generar entidad
php app/console generate:doctrine:entity

###Crear Base de datos
php app/console doctrine:database:create

###Crear Tablas (mostrar sólo DUMP)
php app/console doctrine:schema:create --dump-sql

###Crear Tablas 
php app/console doctrine:schema:create

###Actualizar Tablas
php app/console doctrine:schema:update  