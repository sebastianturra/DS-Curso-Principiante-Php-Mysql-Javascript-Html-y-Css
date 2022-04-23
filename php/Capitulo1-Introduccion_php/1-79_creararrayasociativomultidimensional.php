<?php
$products = array
(
    'paper' => array
    (
        'paper' => "Multiproposito",
        'casa' => "arbol",
        'cuenta' => "contador",
        'puerta' => "hogar"
    ),
    'a' => array
    (
        'a' => "a",
        'b' => "b",
        'c' => "c",
        'd' => "d"
    ),
    'b' => array
    (
        'aa' => "aa",
        'bb' => "bb",
        'cc' => "cc",
        'dd' => "dd"
    )
);

echo "<pre>";
 
foreach($products as $section => $valor)
    {
        foreach($valor as $key => $values)
        {
            echo "$section: $key($values)";
        }
    }
echo "</pre>";
?>