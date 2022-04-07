<?php
$a = 2;
$b = 3;

function suma(){
//global $a, $b;
return "la suma es".($GLOBALS["a"] + $GLOBALS["b"]);
}

echo suma();
?>