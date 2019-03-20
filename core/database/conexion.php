<?php

/**
 *  Clase para la conexión con la Base de Datos.
 */
class Conexion {

    /**
     *  Conecta y devuelve una instancia PDO (PHP Data Object) con la conexión a la BBDD.
     *  Recibe como parámetro una variable que contiene los valores para la conexión a la Base de Datos.
     *
     *  Nota :
     *  Esta variable, se instancia en la clase '', mediante un 'require' del fichero 'config.php'.
     *  El fichero 'config.php', simplemente devuelve un array array ¿¿¿asociativo??? con los datos de la conexión
     */
    public static function conectar($config){

        //echo '<pre>' . var_dump($config) . '</pre>';

        try{
            $pdo = new PDO(
                "{$config['sgbd']}:host={$config['host']};dbname={$config['db_name']}", $config['user'], $config['pass']
                //'mysql:host=192.168.10.10;dbname=bd_prueba', 'homestead', 'secret'
            );
            echo '<h1>Conexión establecida con la Base de Datos</h1>';
            return $pdo;
        }
        catch(PDOException $e){
            echo "<h1>No se puede establecer la conexión con la Base de Datos</h1><br>";
            die($e->getMessage());
        }
    }

}
