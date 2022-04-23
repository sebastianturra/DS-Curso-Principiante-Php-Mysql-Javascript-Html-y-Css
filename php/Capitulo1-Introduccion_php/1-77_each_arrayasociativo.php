<?php
$paper = array
(
'copier' => "Copier",
'inkjet' => "inkjet",
'laser' => "laser",
'photo' => "photo",
);

while (list($item, $description) = myEach($paper))
echo "$item: $description<br>";

function myEach(&$array)  //Cambio por la función deprecada
{  
    $key = key($array);
    $result = ($key === null) ? false : [$key, current($array), 'key', 'value' => current($array)]; 
    next($array);
    return $result;
}

?>