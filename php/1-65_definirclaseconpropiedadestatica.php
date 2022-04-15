<?php
$temp = new Test();

echo "Test A: " . Test::$static_property . "<br>";
echo "Test B: " . $temp->static_property . "<br>";
echo "Test C: " . $temp->get_sp() . "<br>";
echo "Test D: " . $temp->static_property . "<br>";

class Test
{
 static $static_property = "I'm static";

   function get_sp()
 {
    $variable = "El texto es ".self::$static_property;
    return $variable;
 }
}

//NO se puede acceder a una propiedad estatica de la clase con una intanciación de la clase
//SE PUEDE acceder a un metodo estatico, instanciando la clase o usando doble colon.
//Un metodo estatico funciona solo para si mismo y/o con una propiedad estatica.
?>