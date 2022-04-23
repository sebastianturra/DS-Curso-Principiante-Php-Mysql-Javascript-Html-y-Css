<?php
$chessboard = array(
    array('a','b','c','d','e','f','g','h'),
    array('a','b','c','d','e','f','g','h'),
    array('a','b','c','d','e','f','g','h'),
    array('a','b','c','d','e','f','g','h'),
);

echo '<pre>';

foreach($chessboard as $row)
{
    foreach($row as $data)
    {
        echo "$data ";
        
    }
    echo "<br>";
}

echo '</pre>';

//Función is_array() se encarga de chekear si la variable en un array.
echo (is_array($chessboard) ? 'Sí, es un array' : "No, no es un array");

//funcion count
//para contar los elementos del nivel 0
echo "<br>".count($chessboard)."<br>";
//para contar los elementos más allá del nivel 0
echo count($chessboard, 1);
?>