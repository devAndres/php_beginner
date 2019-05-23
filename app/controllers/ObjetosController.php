<?php

/**
 *      Defino :
 *          - Que el fichero pertenece al namespace 'Controllers'
 *          - Que el fichero usa la clase 'App' del namespace 'App\Core'
 */
namespace App\Controllers;

use App\Core\App;
use App\ejemplos\clases\Persona;



/**
 *  Clase para el manejo de peticiones POST para el manejo de Objetos
 *
 *  Objetos implementados en PHP y almacenados en BBDD de MySQL :
 *      - personas
 *      - tareas
 */
class ObjetosController{

    /**
     *    ¿¿¿ Controller para la view del apartado que consta de un formulario para la creación de personas en la BBDD de MySQL ???
     *
     *    Consulto todos los registros de la tabla 'persona'.
     *    Si hay registros en la tabla Persona, los instancio como objeto Persona, para mostrarlos en una tabla de la vista.
     *    Instancio los objetos de la clase 'Persona', llamando al método array_map().
     *    Devuelvo una llamada al método view() pasándole los datos necesarios como parámetro, la cual, cual devuelve la vista 'crear_persona'.
     */
    //public function index(){
    public function crear_objeto_bd(){

        $titulo = "Crear personas";

        $objetosPDO = App::get('database')->getObjetos( 'personas' );

        $personas = array_map(
            function( $item ){
                return new Persona( $item->nombre, $item->edad );
            }, $objetosPDO
        );
        return view( 'crear_persona', compact( 'titulo', 'personas' ) );
    }



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
        //redirigir( 'crear_persona' );
        return view( 'crear_persona', compact( 'titulo' ) );
    }




}
