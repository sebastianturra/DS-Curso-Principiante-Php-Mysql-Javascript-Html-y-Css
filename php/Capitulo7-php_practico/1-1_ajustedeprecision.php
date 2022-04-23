<?php
echo '<pre>';

printf("El resultado es $%15f\n", 123.42 / 12);  //poner 15 espacios.
echo '<br>';
printf("El resultado es $%015f\n", 123.42 / 12);  //poner 15 espacios y rellena con ceros.
echo '<br>';
printf("El resultado es $%15.2f\n", 123.42 / 12);  //poner 15 espacios y 2 decimales de precisión.
echo '<br>';
printf("El resultado es $%015.2f\n", 123.42 / 12);  //poner 15 espacios y 2 decimales de precisión y llena con ceros.
echo '<br>';
printf("El resultado es $%'#15.2f\n", 123.42 / 12);  //poner 15 espacios y 2 decimales de precisión y llena con hash(#).
?>