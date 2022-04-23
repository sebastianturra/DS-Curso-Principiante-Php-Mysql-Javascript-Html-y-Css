<?php
echo '<pre>';

$h = 'Rasmus';

printf("[%s]\n", $h);  //Salida de string estandar
printf("[%12s]\n", $h);  //Salida de string estandar con 12 espacios de ancho
printf("[%-12s]\n", $h);  //Justificado izquierda con 12 espacios
printf("[%012s]\n", $h);  //Salida de string con ceros
printf("[%'#12s]\n", $h);  //Salida de string con hash

$d = 'Rasmus Lerdorf'; //creador de php

printf("[%12.8s]\n", $d);  //Corta la oración en 8 espacios y justifica a la derecha.
printf("[%-12.12s]\n", $d);  //Corta la oración en 12 espacios y justifica a la izquierda.
printf("[%-'@12.10s]\n", $d);  //Rellenar la oración con @, un length de 12 espacios, corta la oración en 10
//caracteres y ajustado la izquierda.
?>