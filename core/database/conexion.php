<?php

/**
 *  Clase para la conexión con la Base de Datos.
 */
class Conexion {

    /**
     *  Conecta y devuelve una instancia PDO (PHP Data Object) con la conexión a la BBDD.
     *  Recibe como parámetro un array asociativo que contiene los valores para la conexión a la Base de Datos.
     *
     *  Nota :
     *  Este array, lo obtengo llamando al método static 'get(clave)' de la clase 'App' y pasándole la clave que identifica a los valores definidos para la conexión con la BBDD.
     *  Los valores los he definido en la clase 'config.php', mediante un 'require' del fichero 'config.php'.
     *  Y los he envuelto en la clase 'App', pasándole a su método static :
     *      - La clave para identificarlo en la matriz de la clase 'App'
     *      - El array asociativo con los datos, haciendo 'require' del fichero 'config.php'
     */
    public static function conectar( $config ){

        try{
            $pdo = new PDO(
                "{$config['sgbd']}:host={$config['host']};dbname={$config['db_name']}", $config['user'], $config['pass']
                //'mysql:host=192.168.10.10;dbname=bd_prueba', 'homestead', 'secret'
            );
            echo '<h1>Conexión establecida con la Base de Datos !</h1>';
            return $pdo;
        }
        catch( PDOException $e ) {
            echo "<h1>No se puede establecer la conexión con la Base de Datos</h1><br>";
            die( $e->getMessage() );
        }
    }

}
