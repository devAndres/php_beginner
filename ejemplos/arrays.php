<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <nav>
        <ul>
            <?php
                require '../rutas.php';
                foreach ($rutas as $k => $v) : ?>
                    <?= "<li><a href='$v'>$k</a></li>"; ?>
                <?php endforeach ?>
        </ul>
    </nav>


    <?php

        /* ARRAYS NUMÉRICOS */
        $nombres = [
            'Andrés',
            'Pepe'
        ];
        echo "<ul>";
        foreach( $nombres as $i ){
            echo '<li>' . $i . '</li>';

        }
        echo '</ul>';


        /* ARRAYS ASOCIATIVOS */
        $persona = [
            'nombre' => 'Andrés',
            'edad' =>  29
        ];
        echo "<pre>" . var_dump($persona) . "</pre>";
        foreach ( $persona as $k => $v ){
            echo "$k : $v<br>";
        }
        echo "<br>$persona[nombre] tiene $persona[edad] años<br>";
        echo $persona['edad']>18 ? "Es mayor de edad" : "Es menor de edad";

    ?>


</body>
</html>










