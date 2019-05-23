<?php

/**
 *       Defino que pertenece al namespace 'Controllers', dentro de 'App'
 */
namespace App\Controllers;
use App\Core\App;



/**
 *  Clase manejadora de los controllers de los views
 *
 *  Contiene un método por cada view del proyecto, a la que se quiera definir un controller.
 *
 *      - Recibo la petición
 *      - Delego en un método controlador
 *      - Devuelvo la respuesta
 */
class PagesController{


    /**
     *      Controller para la view del apartado 'inicio'.
     *
     *      Selecciono aleatoriamente, la ruta de una imagen, para mostrarla en la vista.
     *      Devuelvo una llamada al método view() pasándole los datos necesarios como parámetro, la cual, cual devuelve la vista inicial/principal.
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
        $txt_pie_img = "Esto es una imagen";

        return view( 'index', compact( "titulo", 'ruta_img', 'txt_pie_img' ) );
    }


    /**
     *      Controller para la view del apartado 'Sobre nosotros'.
     *
     *      Devuelvo una llamada al método view() pasándole los datos necesarios como parámetro, la cual, cual devuelve la vista 'about'.
    */
    public function about(){

        $titulo = "Sobre Nosotros";

        /*return view( 'about', compact('titulo') );*/
        return view( 'about', [ 'titulo' => $titulo ] );
    }


    /**
     *    Controller para la view del apartado 'Contacto'.
     *
     *    Devuelvo una llamada al método view() pasándole los datos necesarios como parámetro, la cual, cual devuelve la vista 'contacto'.
     */
    public function contacto(){

        $titulo = "Contacto";

        return view( 'contacto', compact('titulo') );
    }






    /**
     *    Controller para la view del apartado que muestra datos sobre el HTTP header.
     *
     *    Devuelvo una llamada al método view() pasándole los datos necesarios como parámetro, la cual, cual devuelve la vista 'crear_persona'.
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
