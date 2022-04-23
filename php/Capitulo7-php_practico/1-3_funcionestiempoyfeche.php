<?php
echo time();
echo '<br>'."Añadir un semana".'<br>';
echo time()+(7*24*60*60);
echo '<br>'."Para calcular la cantidad de segundos de determinada fecha es:".'<br>';
echo mktime(0,0,0,1,1,2000);       //('hora','minutos','segundos','mes','dia','año');

echo '<br>';
// se escribe asi date($format, $timestamp);
echo date("l F jS, Y - g:ia", time());
$variable = date("F", time());

print('<br>'.$variable);
?>