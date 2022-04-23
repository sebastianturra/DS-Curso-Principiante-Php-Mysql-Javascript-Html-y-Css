<?php
User::pwd_string(); //Llamando directamente de la clase. Es uso idealmente para eso.
/*
$objeto = new User();
$metodo = $objeto->pwd_string();

echo $metodo; 
*/
class User
{
    public $nombre;
    static function pwd_string()
    {
       // echo "Tu nombre es ".$this->nombre; ESTO TIRA ERROR.
        echo "Ingrese la contraseña.";
    }
}
?>