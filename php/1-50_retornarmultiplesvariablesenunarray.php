<?php
 $names = fix_names("WILLIAM", "henry", "gatES"); //Se trasforma en array
    var_dump($names);
   // echo $names[0] . " " .$names[1] . " " .$names[2];

 function fix_names($n1,$n2,$n3)
 {
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return array($n1,$n2,$n3);
 }  

/*
 $a = "WILLIAM";
 $b = "henry";
 $c = "gatES"; 

 function fix()
 {
    global $a,$b,$c;

    $n1 = ucfirst(strtolower($a));
    $n2 = ucfirst(strtolower($b));
    $n3 = ucfirst(strtolower($c));

    return $n1 . " " . $n2 . " " . $n3;
 }

 echo fix();
 */

 


?>