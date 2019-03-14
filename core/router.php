<?php


class Router{

    $rutas;

    /**
     * Constructor
     */
    public function define( $rutas ){
        $this->rutas = $rutas;
    }

    /**
     *  Devuelvo la ruta correspondiente a la URI pasada por parámetro
     */
    public function dirigir($uri){

        if( array_key_exists(  $uri, $this->rutas ) ){
            return $this->routes['about'];
        }

        throw new Exception( 'No hay una ruta definida para la URI $uri' );
    }

}
