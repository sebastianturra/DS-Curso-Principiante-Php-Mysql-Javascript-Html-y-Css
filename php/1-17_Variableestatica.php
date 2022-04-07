<?php 
function test()
{
 static $count = 0;
 echo $count;
 $count++;
}

function writehelloworld()
{
    static $contador = 0;
    $contador ++;
    return "<br>hello world"." Contador de hello world: ".$contador;
}
echo "<br>".test();
echo "<br>".test();
echo "<br>".test();

echo writehelloworld();
echo writehelloworld();
echo writehelloworld();
echo $contador;


?>