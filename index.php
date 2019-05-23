<?php


/**
 *  Hago require del fichero 'vendor/autoload.php', que contiene la definición de las rutas de los ficheros que quiero cargar al inicio de la aplicación
 *  Previamente :
 *      - He creado un un fichero 'composer.json', en el que definido dichas rutas  (He definido todas, './' )
 *      - Estando ubicado en la carpeta del proyecto, ejecuto :     composer install
 *      - He ido a la página www.getcomposer.com y he ejectuado los comandos que especifican en ella (cambian con cada nueva versión)
 *
 *  Para añadir nuevas clases al autoload, ejecuto :
 *      composer dump-autoload
 */
require 'vendor/autoload.php';


/**
 *  Hago require del fichero 'bootstrap.php', el cuál contiene una instancia de la conexión con la BBDD
 */
require 'core/bootstrap.php';



/**
 *      Defino los namespace que uso en este fichero
 */
use App\Core\{ Router, Request };




/**
 *  Instancio un objeto de la clase 'Router', pasándole a su método static cargar(ficheroRutas)
 *  El fichero 'rutas.php', llama al método definir(rutas) de la clase 'Router',
 *  pasándole como argumento, un array asociativo con las rutas del proyecto
 *  Así, defino las URIs y sus correspondientes rutas en el proyecto
 */
Router::cargar( 'app/rutas.php' )
//$router = new Router;
    ->dirigir( Request::uri(), Request::metodo() );


