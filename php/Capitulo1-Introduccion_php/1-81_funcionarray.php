<?php 
$abecedario = array('a', 'b', 'f', 'h', 'e', 'j', 'c', 'v', 'q');

echo "<br>".sort($abecedario)."<br>";
echo "<pre>";
var_dump($abecedario);
echo "</pre>";

echo "<br>".sort($abecedario, SORT_NUMERIC)."<br>";
echo "<pre>";
var_dump($abecedario);
echo "</pre>";
echo "<br>".sort($abecedario, SORT_STRING)."<br>";
echo "<pre>";
var_dump($abecedario);
echo "</pre>";

echo "<br>".rsort($abecedario, SORT_NUMERIC)."<br>";
echo "<pre>";
var_dump($abecedario);
echo "</pre>";
echo "<br>".rsort($abecedario, SORT_STRING)."<br>";
echo "<pre>";
var_dump($abecedario);
echo "</pre>";

shuffle($abecedario);
var_dump($abecedario);

?>