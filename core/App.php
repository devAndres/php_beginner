<?php



/**
 *  Clase para envolver los datos importantes de la aplicación
 *
 *  La configuración, la conexión con la Base de Datos, etc
 *
 *  Claves :
 *      - config
 *      - database
 */
class App{

    // Atributos

    // Array asociativo en el que envuelvo los datos
    protected static $registry = [];

    // Métodos static


    /**
     *  Envuelvo una configuración, en la clase App
     */
    public static function bind( $clave, $valor ){
        static::$registry[ $clave ] = $valor;
    }

    /**
     *  Devuelvo uno de los elementos del arrary asociativo, en base al valor recibido como parámetro
     *
     *  (Su clave en el array asociativo 'registry')
     */
    public static function get( $clave ){

        if( ! array_key_exists( $clave, static::$registry ) ){
            throw new Exception( "{$clave} no ha sido envuelta en el contenedor" );
        }
        return static::$registry[ $clave ];
    }

} // fin de clase
