<?php


echo "<h1>Hola, desde el fichero PHP<h1>";

/**
 *  Ejecuto una consulta sobre la Base de Datos y recojo el resultado
 */
$resultado = $app['database']->getObjetos( 'personas' );


/**
 * Obtengo valores del array asociativo $_SERVER, para mostrarlos en el HTML
 */
/*$valores = [
    'protocolo' => $_SERVER['SERVER_PROTOCOL'],
    'URI' => $_SERVER['REQUEST_URI'],
    'cliente' => $_SERVER['HTTP_USER_AGENT']
];

$todos = $_SERVER;
*/
require 'views/index.view.php';

require 'ejemplos/Clases.php';
echo "<ul>";
$personas = [];

foreach( $resultado as $i ){
    $personas[] = new Persona( $i->nombre, $i->edad );
    echo "<li>{$personas[sizeof($personas)-1]->toString()}</li>";
}
echo "</ul>";
//die();











