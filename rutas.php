<?php


/**
 *      Añado los redireccionamiento de cada URL, hacia su correspondiente método de su clase Controller.
 *
 *      Definiéndolo mediante los métodos 'get()' y 'post()' de la clase 'Router', para almacenarlo en el array asociativo, que es atributo de instancia, de dicha clase.
 *      Paso como parámetros :
 *          - URL que sirve de clave para identificarlo en el array asocitaivo
 *          - Cadena de texto : claseController@metodoController
 */

$router->get( '', 'PagesController@home' );
$router->get( 'contacto', 'PagesController@contacto' );
$router->get( 'about', 'PagesController@about');
$router->get( 'crear_persona', 'PagesController@crear_persona' );
$router->get(  'http_header', 'PagesController@http_header' );

$router->post(  'recoger', 'ObjetosController@recoger' );




/*$router->definir( [
    '' => 'controllers/index.php',
    'contacto' => 'controllers/contacto.php',
    'about' => 'controllers/about.php',
    'crear' => 'controllers/crear_persona.php',
    'http_url' => 'controllers/http_url.php',

    'Arrays' => 'ejemplos/arrays.php',
    'Clases' => 'ejemplos/clases.php',
    'Conexion con BBDD' => 'ejemplos\pdo.php',
    'Conexion con BBDD, encapsulada en clases' => 'controllers/index_bd.php'

] );*/
