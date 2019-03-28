<?php

/**
 *  Clase para gestionar las peticiones de URI que el cliente hace desde el navegador
 */
class Request{

    /**
     *  Método static que devuelve la URI a la que el usuario quiere dirigrise
     */
    public static function uri(){

        //echo "Has enviado : " . $_SERVER['REQUEST_URI'];
        // 1º Separo la URL de los parámetros (en caso de que los haya)
        // 2º Elimino los carácteres '/'
        return trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );

    }

    /**
     *  Método static que devuelve el tipo de petición realizada (GET o POST)
     */
    public static function metodo(){
        return $_SERVER['REQUEST_METHOD'];
    }

}
