<?php
$object1 = new user();

$object1->name = "Camila";
$object2 = clone $object1;
$object2->name ="amy";

echo "Object1 name = " . $object1->name . "<br>";
echo "Object2 name = " . $object2->name . "<br>";

class user
{
 public $name;
}





?>