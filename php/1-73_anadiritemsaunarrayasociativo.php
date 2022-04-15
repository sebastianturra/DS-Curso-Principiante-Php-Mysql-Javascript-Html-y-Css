<?php
$paper['Copier'] = "Copier & Multiporpuse";  //Funciona para crear el array y añadir objetos al array.
$paper['inkjet'] = "Inkjet";
$paper['laser'] = "Laser";
$paper['photo'] = "Photograpich paper";

echo $paper['laser'];

//otra forma puede ser:

$other = array('other'=>'xxxx');
$clerk = array_merge($other,$clerk);

var_dump();
?>