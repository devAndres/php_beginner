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
     *  Defino las ruta
     */
    /*public function definir( $rutas ){
        //$this->rutas = $rutas;
        $this->rutas =  [
            'GET' => [], // para peticiones GET
            'POST' => [] // para peticiones POST
        ];
    }*/

    /**
     *  Devuelvo la ruta correspondiente a la URI pasada por parámetro, si existe en el array asociativo definido lanzo una excepción
     */
    public function dirigir( $uri, $tipoPeticion ){

        if( array_key_exists(  $uri, $this->rutas[$tipoPeticion] ) ){

            return $this->callAction(
                ...explode( '@', $this->rutas[$tipoPeticion][$uri])
            );
        }

        echo "<h1>La ruta que has introducido, no es válida</h1>";
        throw new Exception( "No hay una ruta definida para el controlador de {$uri}" );
    }


    /**
     *  Llamo al método protected, que contiene el controlador de la vista a la que se quiere llamar
     */
    protected function callAction( $controlador, $accion ){

        /*echo "<pre>".var_dump($this->rutas)."</pre>";
        echo "<pre>".var_dump($controlador)."</pre>";
        echo "<pre>".var_dump($accion)."</pre>";
        echo "<pre>".var_dump($this->rutas)."</pre>";*/

        if( method_exists( $controlador, $accion ) ){
            return  (new $controlador)->$accion();
        }

        echo "<h1>La clase controller o el método que has introducido, no es válido</h1>";
        throw new Exception( "No hay un controlador {$controlador} implementado para la acción {$accion}" );

    }


    // AÑADO MÉTODOS PARA PODER ALMACENAR LOS REDIRECCIONAMINETOS [URL->URI], SEPARANDOLOS EN BASE AL MÉTODO DE PETICIÓN (request method)

    /**
     *  Añado un redireccionamiento GET
     */
    public function get( $uri, $controller ){
        $this->rutas['GET'][$uri] = $controller;

    }

    /**
     *  Añado un redireccionamiento POST
     */
    public function post( $uri, $controller ){
        $this->rutas['POST'][$uri] = $controller;
    }


} // fin de la clase
