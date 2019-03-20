<?php

/**
 *  Clase para gestionar las peticiones de URI que el cliente hace desde el navegador
 */
class Request{

    /**
     *  Método static que devuelve la URI a la que el usuario quiere dirigrise
     */
    public static function uri(){
        return trim( $_SERVER['REQUEST_URI'], '/' );
    }

}
