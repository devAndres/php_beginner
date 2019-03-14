<?php


// Conecto con la BBDD
$database = require '../core/bootstrap.php';


// Inicializo la clase para el manejo de las rutas del proyecto
$router = new Router;
// Indico que voy a hacer referencia al fichero que contiene las rutas
require '../rutas.php';
//

//
require $router->direct('about ');




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


/*

INSTANCIO MEDIANTE EL MÉTODO array_map()

*/
$personas2 = array_map(
    function($instancia){
        return new Persona( $instancia->nombre, $instancia->edad );
    }, $resultado
);
// Muestro las instancias
/*foreach($personas2 as $i){
    echo $i->toString() . "<hr>";
}*/


require '../views/index_bd.view.php';
