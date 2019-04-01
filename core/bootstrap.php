<?php

/**
 *      Fichero 'bootstrap.php' :
 *
 *      Envuelvo las configuraciones de la aplicación :
 *          - config
 *                  - database
 *          - database
 *
 *      Métodos globales :
 *          - view( $nombre, $data )
 *          - redirigir( $path )
 *          -
 */


/**
 *      Envuelvo la configuración de la aplicación, en la clase APP.
 *
 *      Paso como parámetros :
 *          - La clave que identificará al array asociativo en el que está definida la configuración.
 *          - Dicho array, que obtengo, haciendo require del fichero 'config.php'.
 */
App::bind( 'config', require 'config.php' );


/**
 *      Envuelvo una instancia de la conexión a la Base de Datos, pasándole como parámetros :
 *          - La clave que identificará
 *          - Una instancia de la clase 'QueryBuilder'
 *
 *      Al constructor de la clase 'QueryBuilder' le paso, una instancia de la clase de PHP 'PDO' (PHP Data Object), obtenida :
 *      Llamando al método static de la clase 'Conexion', al que le paso el array asociativo con los valores de la conexión con la BBDD,
 *      que está dentro del array asociativo que contiene las configuraciones de la aplicación)
 */
App::bind( 'database', new QueryBuilder(
    Conexion::conectar( App::get('config')['database'] )
) );



/**
 *      MÉTODOS ¿ globales ? :
 */


/**
 *      Devuelvo un 'require' con la ruta del fichero de la vista de un controlador concreto, especificado como parámetro.
 *
 *      Recibo :
 *          - El nombre de la vista
 *          - Datos compactados mediante la función compact('data')
 */
function view( $nombre, $data ){

    // Extraigo los datos compactados en la variable $data
    if( ! is_null( $data ) ){
        extract( $data );
    }

    require "views/". $nombre .".view.php";
}


/**
 *      Redirijo al usuario a una URI, en base a la URL pasada por parámetro
 *
 *      ¿¿ Añadiendo una cabecera HTTP a la respuesta que se envía al cliente??
 *      Recibo la clave que identifica a la URL correspondiente, en el array asociativo 'rutas', almacenado en la clase 'Router'
 */
function redirigir( $path ){
    header( "Location: /{$path}" );
}


/*echo "<pre>". var_dump(App::get('config')['database']). "</pre>";
echo "<pre>". var_dump(App::get('database')). "</pre>";*/

/**
 *  Instancio un array asociativo en el que voy a almacenar array asociativos :
 *      config =>
 */
//$app = [];
// Le añado el fichero con los datos de configuración (array asociativo, en el que los valores son arrays asociativos)
//$app['config'] = require 'config.php';


// Importo ficheros para el redireccionamiento de las URIs a sus correspondientes rutas
//require 'core/Router.php';
//require 'core/Request.php';

// Importo ficheros para el manejo de la Base de Datos
//require 'core/database/Conexion.php';
//require 'core/database/QueryBuilder.php';

/**
 *  Devuelvo una instancia de la conexión a la Base de Datos, pasándole al constructor de la clase 'QueryBuilder', una instancia de la clase de PHP 'PDO' (PHP Data Object), obtenida :
 *  Llamando al método static de la clase 'Conexion', al que le paso el array asociativo con los valores de la conexión con la BBDD
 *  (que está dentro del array asociativo que contiene las configuraciones de la aplicación)
 */
/*$app['database'] = new QueryBuilder(

    Conexion::conectar( $app['config']['database'] )

);*/

