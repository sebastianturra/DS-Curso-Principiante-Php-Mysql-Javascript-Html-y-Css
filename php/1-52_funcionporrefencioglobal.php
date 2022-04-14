<?php
$a1 = "FeLIPe";
$a2 = "CarLoS";
$a3 = "EsTEbaN";

echo $a1 . " " . $a2 . " " . $a3;

fix_names();

echo $a1 . " " . $a2 . " " . $a3;

function fix_names(){
    global $a1,$a2,$a3;

    $a1 = ucfirst(strtolower($a1));
    $a2 = ucfirst(strtolower($a2));
    $a3 = ucfirst(strtolower($a3));
}

?>