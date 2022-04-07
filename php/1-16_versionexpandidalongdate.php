<?php
    // l(ele minuscula) es día.
    // F es mes.
    // j dia del mes.
    // S posición 
    // Y año  
    function longdate($timestamp){
        $temp = date("l F jS Y",$timestamp);
        return "La fecha es ".$temp;
    }

    echo longdate(time());

    //Ejemplo fallido
    $temp = "La fecha es ";
    function longdatefallido($timestamp){ 
        return $temp.date("l F jS Y",$timestamp);
    }

    echo longdatefallido(time());

    //Ejemplo correcto
    function longdatecorrecto($timestamp){
        return date("l F jS Y",$timestamp);   
    }
    $temp = "La fecha es ";
    echo "<br>".$temp.longdatecorrecto(time());

    //Ejemplo Usar una variables fuera de la función.
    $temp = "La fecha es ";

    function longdateintegrado($temp,$timestamp)
    {
        return $temp.date("l F jS Y",$timestamp);
    }

    echo "<br>".longdateintegrado($temp,time());

    global $VARIABLE

?>