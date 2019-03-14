<?php


class Consulta{

    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    // Devolver objetos
    public function getObjetos($nTabla){
        $statement = $this->pdo->prepare("SELECT * FROM $nTabla");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    // Devolver instancias de una clase
    public function getClases($nTabla, $nClase){
        $statement = $this->pdo->prepare("SELECT * FROM $nTabla");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $nClase);
    }


}
