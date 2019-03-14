<?php


class Conexion {

    // CONEXIÓN CON LA BBDD
    public static function conectar($config){

        echo '<pre>' . var_dump($config) . '</pre>';

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
