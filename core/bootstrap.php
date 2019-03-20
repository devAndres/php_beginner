<?php

/**
 *  Instancio un array asociativo en el que voy a almacenar array asociativos :
 *      config =>
 */
$app = [];
// Le añado el fichero con los datos de configuración (array asociativo, en el que los valores son arrays asociativos)
$app['config'] = require 'config.php';

// Importo ficheros para el redireccionamiento de las URIs a sus correspondientes rutas
require 'core/Router.php';
require 'core/Request.php';

// Importo ficheros para el manejo de la Base de Datos
require 'core/database/Conexion.php';
require 'core/database/QueryBuilder.php';

/**
 *  Devuelvo una instancia de la conexión a la Base de Datos, pasándole al constructor de la clase 'QueryBuilder', una instancia de la clase de PHP 'PDO' (PHP Data Object), obtenida :
 *  Llamando al método static de la clase 'Conexion', al que le paso el array asociativo con los valores de la conexión con la BBDD
 *  (que está dentro del array asociativo que contiene las configuraciones de la aplicación)
 */
$app['database'] = new QueryBuilder(

    Conexion::conectar( $app['config']['database'] )

);

