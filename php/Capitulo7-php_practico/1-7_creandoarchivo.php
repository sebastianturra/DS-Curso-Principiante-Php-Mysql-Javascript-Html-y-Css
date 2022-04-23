<?php //testfile.php
$fh = fopen("testfile.txt", 'W') or die("Failed to create file");

$text = <<<_END
LINE 1
LINE 2
LINE 3
_END;

fwrite($fh, $text) or die("No se pudo escribir el archivo");
fclose($fh);
echo "File 'testfile.php' escrito exitosamente. "; 
?>