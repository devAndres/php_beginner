<?php

require 'clases.php';


// CONECTO CON LA BBDD
try{
    $pdo = new PDO('mysql:host=192.168.10.10;dbname=bd_prueba', 'homestead', 'secret');
    echo '<h1>Conexión establecida con la Base de Datos</h1>';
}
catch(PDOException $e){
    echo "<h1>No se puede establecer la conexión con la Base de Datos</h1><br>";
    die($e->getMessage());
}


echo "<hr><h2>Recojo el resulado con ello instancio la clase correspondiente</h2>";
// PREPARO LA CONSULTA
$statement = $pdo->prepare("SELECT * FROM personas");
$statement->execute();
// RECOJO EL RESULTADO PARA ACCEDER A LOS VALORES DE CADA REGISTRO
$resultado = $statement->fetchAll(PDO::FETCH_OBJ);
// INSTANCIO OBJETOS A PARTIR DEL RESULTADO DE LA CONSULTA
$personas = [];
foreach($resultado as $i){
    $personas[] = new Persona($i->nombre, $i->edad);
    //array_push($personas, new Persona($i->nombre, $i->edad));
}
// MUESTRO POR PANTALLA LOS OBJETOS INSTANCIADOS
foreach($personas as $i){
    echo $i->toString();
}
mostrarVar($personas);




echo "<hr><h2>Recogo el resulado directamente en la clase correspondiente</h2>";
// PREPARO LA CONSULTA
$statement = $pdo->prepare("SELECT * FROM tareas");
$statement->execute();
// RECOJO EL RESULTADO EN UNA INSTANCIA DE LA CLASE
$tareas = $statement->fetchAll(PDO::FETCH_CLASS, 'Tarea');
echo "<ul>";
foreach($tareas as $i){
    echo "<li>" . $i->toString() . "</li>";
}
echo "</ul>";
mostrarVar($tareas);




