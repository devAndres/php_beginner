<?php


echo "<h1>Hola, desde el fichero PHP<h1>";



/**
 *  Instancio una variable, haciendo require de la clase 'bootstrap.php', el cuál devuelve la instancia de la conexión con la BBDD
 */
$database = require 'core/bootstrap.php';



/**
 *  Instancio un objeto de la clase 'Router', pasándole a su método static cargar(ficheroRutas)
 *  El fichero 'rutas.php', llama al método definir(rutas) de la clase 'Router',
 *  pasándole como argumento, un array asociativo con las rutas del proyecto
 *  Así, defino las URIs y sus correspondientes rutas en el proyecto
 */
require Router::cargar( 'rutas.php' )
    ->dirigir( Request::uri() );
