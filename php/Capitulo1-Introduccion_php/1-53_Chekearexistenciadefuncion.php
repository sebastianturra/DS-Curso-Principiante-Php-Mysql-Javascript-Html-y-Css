<?php

include("Librarias/libreria.php"); // Esto es una inclución
include_once("Librarias/libreria.php"); // Esto es una inclución Para cargar solamente una vez el archivo php.
require_once("Librarias/libreria.php"); //Esto es una inclución pero si el archivo no se encuentra saldra error
//y no se carga el php.

function suma(){

}

if(function_exists('suma')){   //verifica si existe la función en el archivo.
    echo true;
}

?>