<?php
 $balancebanco = 300;

 if ($balancebanco < 200)
 {
    $money = 1000;
    $balancebanco += $money;
 } 
 else
 {
    $sabing = 50;
    $balancebanco -= 50;
 }

 echo "Tu balance de banco es : ".$balancebanco;
?>