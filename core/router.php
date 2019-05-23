<?php


/**
 *      Defino que pertenece al namespace 'Core', dentro de 'App'
 */
namespace App\Core;



/**
 *      Clase para gestionar el redireccionamiento de las peticiones del cliente, hacia una URI concreta.
 *
 *
 */
class Router{

    // ATRIBUTOS :

    protected $rutas = [];


    /**
     *      MÉTODOS PUBLIC :
     */


    /**
     *      Cargo las rutas
     *
     *      Método static que sirve de contructor, devolviendo una instancia de la clase
     *      Creo una instancia de la clase (referencia 'static')
     *      Importo el fichero PHP que contiene el array asociativo URI=>Ruta
     *      Devuelvo la instancia de la clase 'Router'
     */
    public static function cargar( $ficheroRutas ){

        $router = new static;

        require $ficheroRutas;

        return $router;

    }


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


    // AÑADO MÉTODOS PARA PODER ALMACENAR LOS REDIRECCIONAMINETOS [URL->URI], SEPARANDOLOS EN BASE AL MÉTODO DE PETICIÓN (request method)

    /**
     *      Añado un redireccionamiento de tipo GET, al array asociativo 'GET', que es un elemento del array asociativo 'rutas'.
     *
     *      Recibo :
     *          - La clave que lo identifica, que se corresponde con la URL, que sirve para localizar el fichero correspondiente.
     *          - Una cadena de texto formada por : ClaseController@metodoController
     */
    public function get( $uri, $controller ){
        $this->rutas['GET'][$uri] = $controller;

    }


    /**
     *      Añado un redireccionamiento de tipo POST, al array asociativo 'POST', que es un elemento del array asociativo 'rutas'.
     *
     *      Recibo :
     *          - La clave que lo identifica, que se corresponde con la URL, que sirve para localizar el fichero correspondiente.
     *          - Una cadena de texto formada por : ClaseController@metodoController
     */
    public function post( $uri, $controller ){
        $this->rutas['POST'][$uri] = $controller;
    }


    /**
     *      MÉTODOS PROTECTED :
     */


    /**
     *      Llamo al método protected, que contiene el controlador de la vista a la que se quiere llamar
     */
    protected function callAction( $controlador, $accion ){

        /*echo "<pre>".var_dump($this->rutas)."</pre>";
        echo "<pre>".var_dump($controlador)."</pre>";
        echo "<pre>".var_dump($accion)."</pre>";
        echo "<pre>".var_dump($this->rutas)."</pre>";*/

        $controlador = "App\\Controllers\\{$controlador}";        //die($controlador);
        $controlador = new $controlador;

        if( method_exists( $controlador, $accion ) ){
            return  (new $controlador)->$accion();
        }

        echo "<h1>La clase controller o el método que has introducido, no es válido</h1>";
        throw new Exception( "No hay un controlador {$controlador} implementado para la acción {$accion}" );

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


} // fin de la clase
