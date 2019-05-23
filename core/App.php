<?php


/**
 *      Defino que pertenece al namespace 'Core', dentro de 'App'
 */
namespace App\Core;



/**
 *      Clase para envolver los datos importantes de la aplicación
 *
 *      La configuración, la conexión con la Base de Datos, etc
 *
 *      Claves :
 *          - config
 *                  - database
 *          - database
 */
class App{

    // ATRIBUTOS STATIC :

    // Array asociativo en el que envuelvo los elementos envueltos
    protected static $registry = [];


    // MÉTODOS STATIC :


    /**
     *      Envuelvo una configuración, en la clase App.
     *
     *      Le paso como parámetros :
     *              - La clave para identificar el elemento, en el array asociativo 'registry'.
     *              - El elemento que se quiere envolver.
     */
    public static function bind( $clave, $valor ){
        static::$registry[ $clave ] = $valor;
    }


    /**
     *      Devuelvo uno de los elementos del arrary asociativo, en base al valor recibido como parámetro.
     *
     *      Recibo como parámetro, su clave en el array asociativo 'registry'.
     *      Si no se ha almacenado ningun elemento con la clave definida, lanzo una excepción.
     */
    public static function get( $clave ){

        if( ! array_key_exists( $clave, static::$registry ) ){
            throw new Exception( "{$clave} no ha sido envuelta en el contenedor" );
        }

        return static::$registry[ $clave ];
    }

} // fin de clase
