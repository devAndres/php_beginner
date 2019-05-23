
<?php require 'app/views/partials/head.php'; ?>

    <link type='text/css' rel='stylesheet' href='public/css/tablas.css'>

</head>
<body>

    <?php require 'app/views/partials/header.php' ?>

    <?php require 'app/views/partials/nav.php' ?>


    <main>

        <!-- URL -->
        <section>
            <h1>Cabecera HTTP contenida en $_SERVER</h1>
            <table class="horizontal">
                <?php foreach( $cabecera_http as $k => $v ){
                    echo "<tr><th>{$k}</th><td>{$v}</td></tr>";
                } ?>
            </table>
        </section>

        <!-- URL -->
        <section>
            <h1>Cabecera obtenida con el método getallheaders()</h1>
            <table class="horizontal">
                <?php
                    foreach( $cabeceras as $k => $v ){
                        echo "<tr><th>{$k}</th><td>{$v}</td></tr>";
                    }
                ?>
            </table>
            <h1>Cabecera obtenida con el método apache_request_headers()</h1>
            <table class="horizontal">
                <?php
                    foreach( $cabecera_peticion_apache as $k => $v ){
                        echo "<tr><th>{$k}</th><td>{$v}</td></tr>";
                    }
                ?>
            </table>
        </section>

    </main>

</body>












<?php require 'app/views/partials/footer.php'; ?>
