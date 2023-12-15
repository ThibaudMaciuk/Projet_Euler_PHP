<?php
$a = 1;
$b = 2;
$somme = 0;
while (($a + $b) < 4000000)
{
    $somme += ($b % 2) ? $b : 0 ;
    list($a, $b) = array($b, $a+$b);
}
echo $somme.PHP_EOL;