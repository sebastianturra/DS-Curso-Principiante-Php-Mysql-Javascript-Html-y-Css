<?php
$month = 9;  //Septiembre; solo tiene 30 dias.
$day = 31;   //31st
$year = 2022;  //2022
/*
if(checkdate($month, $day, $year))
{
    echo "La fecha es valida";
} 
else
{
    echo "La fecha es invalida";
}
*/
$fecha = $month.'-'.$day.'-'.$year;
echo '<br>'."El estado de la fecha es".checkfechavalida($fecha).'<br>';


function checkfechavalida($fecha)
{
    $fechadescomputa = explode('-',$fecha);
    if(checkdate($fechadescomputa[0], $fechadescomputa[1], $fechadescomputa[2]))
        {
            return "Valido";
        } 
        else
        {
            return "NO VALIDO";
        } 
}
?>