<?php require 'views/partials/head.php'; ?>

<?php require 'views/partials/nav.php'; ?>

    <link type='text/css' rel='stylesheet' href='css/http.css'>
    <title>Cabecera HTTP y partes de la URI</title>
</head>
<body>

    <main>

        <!-- URL -->
        <section>
            <h1>Cabecera HTTP</h1>
            <table>
                <?php foreach( $cabecera as $k => $v ){
                    echo "<tr><td>{$k}</td><td>{$v}</td></tr>";
                } ?>
            </table>
        </section>

        <!-- URL -->
        <section>
            <h1>URL</h1>
            <table>
                <?php foreach( $url as $k => $v ){
                    echo "<tr><td>{$k}</td><td>{$v}</td></tr>";
                } ?>
            </table>
        </section>

    </main>

</body>












<?php require 'views/partials/footer.php'; ?>
