<?php
Translate::lookup();  // :: doble colon es para llamar la clase directamente sin crear
//una instanciación de la clase.
/*
$instanciacion = new Translate();

$metodo = $instanciacion->lookup();
echo $metodo;
*/
class Translate
{
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;

    static function lookup()
    {
        echo self::SPANISH; //self es para llamar una constante.
    }
}
?>