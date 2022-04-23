<?php
$fh = fopen("text_file.txt", 'r') or die("El archivo no se encontró.");
$text = fread($fh, 3);  //fread se usa principalmente con datos binarios.
//TEN EN CUENTA SABER EL LARGO DEL STRING.
fclose($fh);
echo $text;

echo file_exists('text_file.txt');
?>