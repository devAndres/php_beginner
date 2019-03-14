<?php


$router->define([
    'Inicio' => '\index.php',
    'Arrays' => '\ejemplos\arrays.php',
    /*'Funciones' => '\ejemplos\funciones.php',*/
    'Clases' => '\ejemplos\clases.php',
    'Conexion con BBDD' => '\ejemplos\pdo.php',
    'Conexion con BBDD, encapsulada en clases' => '\controllers\index_bd.php',
    'Contacto' => '\views\contacto.view.php',
    'Sobre nosotros' => '\views\about.view.php'
]);


/*
$rutas_>define('index', '\controllers\index.php';

Route::get('', '');
*/
