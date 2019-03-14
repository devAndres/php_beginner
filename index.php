<?php

/**
 * Obtengo valores del array asociativo $_SERVER, para mostrarlos en el HTML
 */
$valores = [
    'protocolo' => $_SERVER['SERVER_PROTOCOL'],
    'URI' => $_SERVER['REQUEST_URI'],
    'cliente' => $_SERVER['SERVER_USER_AGENT']

];


/* FUNCIONES : */
require 'ejemplos/funciones.php';
printTitulo( "Hola,  desde el fichero PHP" );






require 'index.view.php';


die();
