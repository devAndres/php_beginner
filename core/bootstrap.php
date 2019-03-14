<?php


$config = require '../config.php';

require 'core/router.php';

require 'core/database/conexion.php';
require 'core/database/constructorConsultas.php';


return new Consulta(

    Conexion::conectar($config['database'])

);

