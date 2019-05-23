
<?php require 'app/views/partials/head.php'; ?>

<?php require 'app/views/partials/nav.php'; ?>

    <link type='text/css' rel='stylesheet' href='public/css/formulario.css'>
    <link type='text/css' rel='stylesheet' href='public/css/tablas.css'>
</head>

<body>

    <?php require 'app/views/partials/header.php' ?>

    <?php require 'app/views/partials/nav.php' ?>


    <main>

        <!-- URL -->
        <section>
            <form action="/recoger" method="post" tarjet="_blank">
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
            <table class= "vertical">
                <tr><th>Nombre</th><th>Edad</th></tr>
                <?php foreach( $personas as $i ){
                    echo "<tr><td>{$i->getNombre()}</td><td>{$i->getEdad()}</td></tr>";
                } ?>
            </table>
        </section>

    </main>

</body>












<?php require 'app/views/partials/footer.php'; ?>
