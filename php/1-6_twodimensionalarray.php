<?php

$team_single = array('Carlos', 'Luis', 'Pepe');
echo '<pre>', var_dump($teamsingle), '<pre>';

$team_multiple = array(
                    array('x',' ','o'),
                    array(' ','x','o'),
                    array(' ','x','o'),
                );
                
//echo '<pre>', var_dump($teammultiple), '<pre>';
echo "Posición tercera en la segunda fila: ".$teammultiple[1][2]; 

?>