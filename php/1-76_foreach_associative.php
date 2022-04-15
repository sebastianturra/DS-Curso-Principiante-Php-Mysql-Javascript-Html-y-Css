<?php
$paper = array
(
'copier' => "Copier & Multiporpuse",
'inkjet' => "Inkjet",
'laser' => "Laser",
'photo' => "Photo"
);

foreach($paper as $item => $description){
    echo "$item: $description<br>";
}
?>