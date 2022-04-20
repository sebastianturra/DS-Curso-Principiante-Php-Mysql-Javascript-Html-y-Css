<?php
//extract($_GET);

// Si quieres obtener las variables con un prefijo se debe poner de esta forma.
extract($_GET, EXTR_PREFIX_ALL, 'prueba');

var_dump($_GET);
/*
foreach($_GET as $key => $value){
    echo '<br>'."$key: $value".'<br>';
}
*/

$nombrees = $prueba_nombre;
$apellidoes = $prueba_apellido;

echo isset($nombrees) ? '<br>'."Si, Nombre es $nombrees".'<br>' : '<br>'.'No'.'<br>';
echo isset($apellidoes) ? '<br>'."Si, apellido es $apellidoes".'<br>' : '<br>'.'No'.'<br>';
?>