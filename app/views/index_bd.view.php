<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/estilo.css">
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

    <ul>
        <?php foreach($personas as $i) : ?>
            <?= "<li>{$i->toString()}</li>" ?>
        <?php endforeach ?>
    </ul>

    <hr>

    <ul>
        <?php foreach($personas2 as $i) : ?>
            <?= "<li>{$i->toString()}</li>" ?>
        <?php endforeach?>
    </ul>

</body>
</html>
