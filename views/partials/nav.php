<?php


$enlaces = [
    'Inicio' => '/',
    'Contacto' => '/contacto',
    'Sobre nosotros' => '/about'
 ];
echo "<nav><ul>";
foreach( $enlaces as $k => $v ) echo "<li><a href='{$v}'>{$k}</a></li>";
echo "</ul></nav>";

?>
