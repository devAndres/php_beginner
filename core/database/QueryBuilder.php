<?php


require 'ejemplos/clases.php';


/**
 *  Clase para la construción de consultas SQL a la Base de Datos
 */
class QueryBuilder{

    protected $pdo;

    // Constructor
    public function __construct( $pdo ){
        $this->pdo = $pdo;
    }

    // MÉTODOS :

    // Devolver objetos
    public function getObjetos( $nTabla ){
        $statement = $this->pdo->prepare("SELECT * FROM $nTabla");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    // Devolver instancias de una clase
    public function getClases( $nTabla, $nClase ){
        $statement = $this->pdo->prepare("SELECT * FROM $nTabla");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $nClase);
    }

    // Inserto registros en una tabla
    public function insertar( $nTabla, $parametros ){
        $sql = sprintf(
            "INSERT INTO %s( %s ) VALUES ( :%s )",
            $nTabla, implode(', ', array_keys($parametros)), implode(', :', array_keys($parametros))
        );

        try{
            $sentencia = $this->pdo->prepare( $sql );
            $sentencia->execute( $parametros );
        }
        catch( Exception $e ){
            echo "El registro no se ha insertado correctamente";
            dd( $e->getMessage() );
        }

    }

} // fin de la clase
