<?php
$fp = fopen("text.txt", 'wb'); // Abre el archivo

for ($j = 0 ; $j < 100; ++$j)
{
    $written = fwrite($fp , "data");

   if($written == FALSE) break;
// if(!$written) break;
}

fclose($fp);
?>