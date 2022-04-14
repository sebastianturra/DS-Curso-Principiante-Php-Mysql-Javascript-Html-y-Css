<?php
$frutas = array("Platano","Cocos","Maracuya");
$verduras = array("Lechuga","Ajo","Tomate");

$arraycombinado = array_combine($frutas, $verduras);  //LO CONVIERTE EN ARRAY ASOCIATIVO
var_dump($arraycombinado);

if(function_exists('array_combine')){
    echo "<br>" . True . "<br>";
}

phpinfo(); //función que muesta tu información de php usando e instalado.

?>