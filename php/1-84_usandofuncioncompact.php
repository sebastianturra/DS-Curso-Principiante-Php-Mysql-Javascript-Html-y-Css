<?php

$fname = 'Luis';
$fapellido = 'Alberto';

$contact = compact('fname', 'fapellido');  //Esta función esta encargada de convertir las variables en 
//un array asociativo.

var_dump($contact);
print_r($contact);
?>
