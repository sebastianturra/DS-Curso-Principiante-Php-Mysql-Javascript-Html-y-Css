<?php
$j = 'a';
$pepe = 'chu';
$big = 'ben';
$kindle = 'paper';

print_r(compact('j'));
print_r(compact('pepe'));

print_r(explode(' ','j pepe big kindle'));  //Usar explode usando las variables separadas por espacios
//como si fuera una oración separada por espacio funciona para crear un array que contiene todas las variables.

//combinado este del explode junto con el compact convierte todas los values en una variable valor.
print_r(compact(explode(' ','j pepe big kindle')));
$array = compact(explode(' ','j pepe big kindle'));

foreach($array as $key => $value)
{
    echo "$key: $value";
    ($value == 'ben') ? '<br>'.reset($array).'El array ha sido reseteado' : '<br>'.'falso'; 
}

echo '<br>';
echo '<br>';
echo '<br>';

echo current($array);
echo next($array);
echo next($array);
echo prev($array);
echo reset($array);
print_r (each($array));

?>