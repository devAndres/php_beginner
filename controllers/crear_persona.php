<?php

$peticion = $_REQUEST;

var_dump( $peticion );

// Si se ha enviado como petición valores (2) para crear una persona,
// la introduzco como registro en la Persona de la BBDD
if( sizeof($peticion) == 2 ){
    $app['database']->insertar( 'Personas', ['nombre','edad'], [$peticion['nombre'],$peticion['edad']] );
}


// Si hay registros en la tabla Persona, los instancio como objeto Persona
// para mostrarlos en una tabla de la vista
//require 'ejemplos/clases.php';
$objetos = $app['database']->getObjetos( 'personas' );
// INSTANCIO MEDIANTE EL MÉTODO array_map()
$personas = array_map(
    function( $item ){
        return new Persona( $item->nombre, $item->edad );
    }, $objetos
);
var_dump($personas);


require 'views/crear_persona.view.php';
