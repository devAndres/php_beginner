<?php

/**
 *  Clase para redireccionar
 */
class Router{

    // Atributo
    protected $rutas = [];

    /**
     *  Cargo las rutas (método static que hace de contructor, devolviendo una instancia de la clase)
     *  Creo una instancia de la clase (referencia 'static')
     *  Importo el fichero PHP que contiene el array asociativo URI=>Ruta
     *  Devuelvo la instancia
     */
    public static function cargar( $ficheroRutas ){
        $router = new static;

        require $ficheroRutas;
        return $router;
    }

    /**
     *  Defino una ruta
     */
    public function definir( $rutas ){
        $this->rutas = $rutas;
    }

    /**
     *  Devuelvo la ruta correspondiente a la URI pasada por parámetro, si existe en el array asociativo definido
     */
    public function dirigir( $uri ){

        if( array_key_exists(  $uri, $this->rutas ) ){
            return $this->rutas[ $uri ];
        }

        throw new Exception( "No hay una ruta definida para la URI {$uri}" );
    }

} // fin de la clase
