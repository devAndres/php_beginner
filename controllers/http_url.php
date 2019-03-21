<?php


/**
 * Obtengo valores del array asociativo $_SERVER, para mostrarlos en el HTML
 */
$cabecera = /*[
    'protocolo' => $_SERVER['SERVER_PROTOCOL'],
    'URI' => $_SERVER['REQUEST_URI'],
    'cliente' => $_SERVER['HTTP_USER_AGENT']
];

$todos =*/ $_SERVER;



/**
 *
 */
$url = parse_url( $_SERVER['REQUEST_URI'] );
//var_dump($url);


require 'views/http_url.view.php';
