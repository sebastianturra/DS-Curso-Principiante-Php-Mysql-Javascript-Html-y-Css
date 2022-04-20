<?php
list($a, $b) = array('Alice', 'Bob');
echo "$a : $b";

$array = array
(
    'a' => "a",
    'b' => "b",
    'c' => "c"

);

foreach ($array as $key => $value){
    list($key => $a) = $array;
    echo "$a";
}
?>