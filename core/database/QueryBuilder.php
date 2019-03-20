<?php

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


} // fin de la clase
