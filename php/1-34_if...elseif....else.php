<?php
$balancebanco = 500;
$saving = 0;

if ($balancebanco < 150)
{
    $money = 1000;
    $balancebanco += $money;
} 
elseif ( $balancebanco > 200)
{
    $saving += 100;
    $balancebanco -= 100;
} 
else
{
    $saving += 50;
    $balancebanco -= 50;
}
echo "Tu balance de banco es :".$balancebanco;
?>