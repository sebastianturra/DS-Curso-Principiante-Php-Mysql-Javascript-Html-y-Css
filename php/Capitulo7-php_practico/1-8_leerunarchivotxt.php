<?php
$fh = fopen("text_file.txt", 'r') or die("Archivo no existe");
$line = fgets($fh);
fclose($fh);
echo $line;
?>