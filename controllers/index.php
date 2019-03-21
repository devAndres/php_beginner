<?php


echo "<h1>Hola, desde el fichero PHP</h1>";


//var_dump( $app );


/**
 *  Ejecuto una consulta sobre la Base de Datos y recojo el resultado
 */
$resultado = $app['database']->getObjetos( 'personas' );

echo "<ul>";
$personas = [];

foreach( $resultado as $i ){
    $personas[] = new Persona( $i->nombre, $i->edad );
    echo "<li>{$personas[sizeof($personas)-1]->toString()}</li>";
}
echo "</ul>";
//die();


require 'views/index.view.php';








