<?php require 'views/partials/head.php'; ?>

<?php require 'views/partials/nav.php'; ?>

    <link type='text/css' rel='stylesheet' href='css/formulario.css'>
    <title>Crear persona</title>
</head>

<body>

    <main>

        <!-- URL -->
        <section>
            <form action="/crear" method="get" tarjet="_blank">
                <fieldset>
                    <legend>Formulario para crear una  persona :</legend>
                    <table>
                        <tr>
                            <td><label for="nombre">Nombre :</label></td>
                            <td><input type="text" name="nombre"/></td>
                        </tr>
                        <tr>
                            <td><label for="edad">Edad :</label></td>
                            <td><input type="number" name="edad"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="submit">CREAR</button></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </section>

        <section>
            <h1>Personas creadas :</h1>
            <table>
                <tr><th>Nombre</th><th>Edad</th></tr>
                <?php foreach( $personas as $i ){
                    echo "<tr><td>{$i->getNombre()}</td><td>{$i->getEdad()}</td></tr>";
                } ?>
            </table>
        </section>

    </main>

</body>












<?php require 'views/partials/footer.php'; ?>
