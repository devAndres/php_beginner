<?php

$router->definir( [
    '' => 'controllers/index.php',
    'contacto' => 'controllers/contacto.php',
    'about' => 'controllers/about.php',
    'crear' => 'controllers/crear_persona.php',
    'http_url' => 'controllers/http_url.php',

    'Arrays' => 'ejemplos/arrays.php',
    'Clases' => 'ejemplos/clases.php',
    'Conexion con BBDD' => 'ejemplos\pdo.php',
    'Conexion con BBDD, encapsulada en clases' => 'controllers/index_bd.php'

] );
