<?php
$a1 = "wILLiams";
$a2 = "CaRLoS";
$a3 = "gaTEs";

echo $a1 . " " .$a2. " " .$a3;

fix_names($a1,$a2,$a3);

echo $a1 . " " .$a2. " " .$a3;

function fix_names(&$n1,&$n2,&$n3){
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}

?>