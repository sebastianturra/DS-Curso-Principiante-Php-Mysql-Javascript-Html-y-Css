<?php
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

for($j = 0 ; $j < 4 ; ++$j)   //POR SER UNA SOLA LINEA se puede omitir los curly braces.
    echo "$j: $paper[$j]<br>";

foreach($paper as $value)
    echo "$value";
unset($value);

echo "<br>";

foreach($paper as $key => $value)
    echo "$key => $value"."<br>";
?>