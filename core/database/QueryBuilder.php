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
    public function insertar( $nTabla, $nCampos, $nValores ){
        $sql = "INSERT INTO {$nTabla}( ";
        $aux = "";
        $cont = sizeof( $nCampos )-1;
        foreach( range(0, $cont) as $i ){
            $aux = $aux . $nCampos[$i];
            if( $i != $cont )    $aux = $aux . ", ";
        }
        $sql = $sql . $aux . " ) VALUES(";
        $aux = "";
        foreach( range(0, $cont) as $i ){
            $aux = $aux . $nValores[$i];
            if( $i != $cont )    $aux = $aux . ", ";
        }
        $sql = $sql . $aux . " )";

        echo $sql;

        $sentencia = $this->pdo->prepare( $sql );
        $sentencia->execute();
    }

} // fin de la clase
