
alert('HOLA');

function leerFichero(){
    // defino la ubicación del fichero y su nombre
    var fichero = e.tarjet.files[0];//"ficheros.txt";

    // Instancio un objeto FileReader
    var reader = new FileReader();

    //
    reader.onload = function(){
        var lineas = e.tarjet.result;
        mostrar();
    }
    reader.readAsText( fichero );
}

//
function mostrarContenido( contenido ){
    var elemento = document.getElementById( 'contenido-fichero' );
    elemento.innerHTML = contenido;
}

document.getElementById( 'file-input' )
    .addEventListener( 'change', leerFichero(), false );


<input type="file" id ="file-input" />
<h3>Contenido del fichero :</h3>
<pre id="contenido-fichero"></pre>


