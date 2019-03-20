<?php

$router->definir( [
    '' => 'controllers/index.php',
    'contacto' => 'controllers/contacto.php',
    'about' => 'controllers/about.php',

    'Arrays' => 'ejemplos/arrays.php',
    'Clases' => 'ejemplos/clases.php',
    'Conexion con BBDD' => 'ejemplos\pdo.php',
    'Conexion con BBDD, encapsulada en clases' => 'controllers/index_bd.php'

] );
