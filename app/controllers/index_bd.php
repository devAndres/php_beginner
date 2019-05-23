<?php


// Ya tengo la conexión con la BBDD


require '../ejemplos/clases.php';

// Consulto y Recojo los resultados
$resultado = $database->getObjetos('personas');
//echo mostrarVar($resultado) . '<hr>';


// Instancio objetos de las Clase Persona
$personas = [];
foreach($resultado as $i){
    echo mostrarVar($i);
    array_push( $personas, new Persona(
        $i->nombre, $i->edad
    ) );
}
// Muestro las instancias
/*foreach($personas as $i){
    echo $i->toString() . "<hr>";
}*/



// Muestro las instancias
/*foreach($personas2 as $i){
    echo $i->toString() . "<hr>";
}*/


require '../views/index_bd.view.php';
