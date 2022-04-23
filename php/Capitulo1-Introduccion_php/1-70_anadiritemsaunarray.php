<?php
$paper[] = "Copier";              //Tiene el mismo efecto que array_push()
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

array_push($paper, "Papel"); // Añade elemnto al array.
print_r($paper);
?>