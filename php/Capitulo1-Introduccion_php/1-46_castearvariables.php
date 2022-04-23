<?php
$a = 4.666666;
$b = 4.666666;
$c = 4.666666;
$d = 4.666666;
$e = 4.666666;
$f = 4.666666;

echo "<br>".(int)($a)."<br>";      //intval($b)   
echo "<br>".(bool)($b)."<br>";
echo "<br>".(float)($c)."<br>";
echo "<br>".(string)($d)."<br>";   //strval($a)
echo "<br>".(array)($e)."<br>";
//echo "<br>".(object)($f)."<br>";

//DE OTRA FORMA SE PUEDEN USAR LAS SUGIENTES FUNCIONES
echo "<br>".strval($a);
echo "<br>".intval($b);

?>