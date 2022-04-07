<?php 
$a = 2;
$palabra = "palabra";
$_POST['calle'] = "nombre"; //ESTO ES UNA VARIABLE SUPER GLOBAL 
//OCURE SOLAMENTE CON LOS POST Y GET.
$callejon = $_POST['calle'];
function escribirpalabra()
{
    //GLOBAL
    //global $callejon;
    //echo $callejon;

    //SUPERGLOBAL
    echo $_POST['calle'];
}
escribirpalabra();
?>