<?php
copy('text_file.txt','testfile2.php') or die("No se pudo hacer la copia.");

echo (file_exists('testfile2.php')) ? 'Se copió correctamente' : 'No se puedo hacer la copia';



?>