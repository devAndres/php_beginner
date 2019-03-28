

<?php require 'views/partials/head.php' ?>

<?php require 'views/partials/nav.php' ?>


</head>
<body>

    <?php require 'views/partials/header.php' ?>

    <?php require 'views/partials/nav.php' ?>

    <figure>
        <?php
            echo "<img src='{$ruta_img}' alt='Imágen de bienvenida'>";
            echo "<figcaption>{$txt_pie_img}</figcaption>";
        ?>
    </figure>

    <hr>
    <script type="text/javascript" src="./js/leer.js"></script>

    <hr>
    <h1>Hola desde el fichero HTML</h1>
    <hr>



    <?php require 'views/partials/footer.php' ?>
