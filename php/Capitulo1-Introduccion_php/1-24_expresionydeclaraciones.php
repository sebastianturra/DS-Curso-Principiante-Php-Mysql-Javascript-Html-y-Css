<?php
$dias_contados=340;
$dias_para_anio_nuevo = 365 - $dias_contados; //Expresion
if($dias_para_anio_nuevo < 30){
    echo "No mucho para año nuevo";  // Declaración
}

echo (3 > 5) ? "<br>"."Si, lo es" : "<br>"."No, lo es";
?>