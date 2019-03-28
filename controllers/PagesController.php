<?php

/**
 *  Clase manejadora de los controllers de los views
 *
 *  Contiene un método por cada view del proyecto, a la que se quiera definir un controller
 *
 *      - Recibe la petición
 *      - Delega en un método controlador
 *      - Devuelve la respuesta
 */
class PagesController{


    /**
     *  Controller para la view del apartado 'inicio'
     */
    public function home(){

        echo "<h1>Hola, desde la clase PHP ClassController</h1>";

        $titulo = "Página de inicio";

        $imagenes = [
            "imagen_1",
            "imagen_2",
            "imagen_3",
            "imagen_4"
        ];
        $ruta_img = "img/" . $imagenes[ random_int(0, sizeof($imagenes)-1) ] . ".jpg";
        $txt_pie_img = "Esto es una imágen";

        return view( 'index', compact( "titulo", 'ruta_img', 'txt_pie_img' ) );
    }


    /**
     * Controller para la view del apartado 'Sobre nosotros'
    */
    public function about(){

        $titulo = "Sobre Nosotros";

        return view( 'about', compact('titulo') );
    }


    /**
     *    Controller para la view del apartado 'contacto'
     */
    public function contacto(){

        $titulo = "Contacto";

        return view( 'contacto', compact('titulo') );
    }


    /**
     *    Controller para la view del apartado que consta de un formulario para la creación de personas en la BBDD de MySQL
     */
    public function crear_persona(){

        $titulo = "Crear personas";

        // Si hay registros en la tabla Persona, los instancio como objeto Persona, para mostrarlos en una tabla de la vista
        $objetosPDO = App::get('database')->getObjetos( 'personas' );
        // INSTANCIO MEDIANTE EL MÉTODO array_map()
        $personas = array_map(
            function( $item ){
                return new Persona( $item->nombre, $item->edad );
            }, $objetosPDO
        );
        return view( 'crear_persona', compact( 'titulo', 'personas' ) );
    }



    /**
     *    Controller para la view del apartado que muestra datos sobre el HTTP header
     */
    public function http_header(){

        $titulo = "Cabeceras HTTP";

        // Obtengo valores del array asociativo $_SERVER, para mostrarlos en el HTML
        $cabecera_http = $_SERVER;
        $cabeceras = getallheaders();
        $cabecera_peticion_apache = apache_request_headers();

        /*echo "REQUEST : <pre>". var_dump( $peticion ) ."</pre>";
        echo "GET : <pre>". var_dump( $_GET ) ."</pre>";
        echo "POST : <pre>". var_dump( $_POST ) ."</pre>";
        echo "REQUEST_URI : <pre>". var_dump( $_SERVER['REQUEST_URI'] ) ."</pre>";*/

        // Los compacto para pasárselos como parámetro a la función view()
        return view( 'http_header', compact( 'titulo', 'cabecera_http', 'cabeceras', 'cabecera_peticion_apache' ) );
    }

}
