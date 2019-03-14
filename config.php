<?php


return [
    'database' => [
        'sgbd' => 'mysql',
        'host' => '192.168.10.10',
        'db_name' => 'bd_prueba',
        'user' => 'homestead',
        'pass' => 'secret',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION//ERRMODE_WARNING
        ]
    ]
];
