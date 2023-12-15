<?php

[$a, $b] = 0;
While ($a <= 1000)
{
    $a++;
    if (($a % 3) == 0 || ($a % 5) == 0)
    {
        $b = $b + $a;
    }
}
echo $b;
die();