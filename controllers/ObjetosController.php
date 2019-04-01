<?php


/**
 *  Clase para el manejo de peticiones POST para el manejo de Objetos
 *
 *  Objetos implementados en PHP y almacenados en BBDD de MySQL :
 *      - personas
 *      - tareas
 */
class ObjetosController{

    //

    /**
     *  Controller para :
     *
     *  1º Recoger los datos enviados mediante el formulario.
     *  2º Recupero los registros almacenadas en la tabla'personas'.
     */
    public function recoger(){

        $titulo = "Persona creada !";

        /*if( isset($_GET['nombre']) && $_GET['nombre'] != empty ){
            //var_dump($_GET['nombre']);
            echo "No se ha recibido valor para el campo 'nombre'";
        }
        else if( isset($_GET['edad']) ){
            //var_dump($_GET['edad']);
            echo "No se ha recibido valor para el campo 'edad'";
        }*/

        // Si como petición, se han enviado valores (2) para crear una persona, la introduzco como registro en la Persona de la BBDD
        $peticion = $_REQUEST;
        if( sizeof($peticion) == 2 ){
            App::get('database')->insertar( 'personas', $peticion );
        }
        else{
            echo "Solo se ha enviado un valor";
        }


        // Redirijo al cliente
        redirigir( 'crear_persona' );

        //view( 'crear_persona', compact( 'titulo' ) );
    }




}
