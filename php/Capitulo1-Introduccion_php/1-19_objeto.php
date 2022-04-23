<?php
 class auto {
    public $color;
    public $luces;

    public function __construct($color, $luces){
        $this->color = $color;
        $this->luces = $luces;
    }

    public function getmessage(){
        return "Mi auto es de".$this->color." y tiene luces ".$this->luces;
    }
 }

$nuevoauto_a = new auto("Verde","Altas");

echo $nuevoauto_a -> getmessage();

$texto = "hello world";

//largo de la oración
echo "<br>"."Largo de la oración:";
echo strlen($texto);

//Contador de palabras
echo "<br>"."Contador de palabras";
echo str_word_count($texto);
?>