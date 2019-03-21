<?php


$enlaces = [
    'Inicio' => '/',
    'Contacto' => '/contacto',
    'Sobre nosotros' => '/about',
    'Crear personas' => '/crear',
    'HTTP y URL' => '/http_url'
 ];
echo "<nav><ul>";
foreach( $enlaces as $k => $v ) echo "<li><a href='{$v}'>{$k}</a></li>";
echo "</ul></nav>";

?>
