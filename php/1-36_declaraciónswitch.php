<?php
$page = "desconocido";
switch($page)
{
case "Home":
    echo "Has escogido la opción home";
break;
case "About":
    echo "Has escogido la opción about";
break;
case "break":
    echo "Has escogido la opción break";
break;
case "news":
    echo "Has escogido la opción news";
break;
case "links":
    echo "Has escogido la opción links";
break;
default:
    echo "Selección no renocida";
break;
}
?>