<?php

namespace BrainGames\Utils\Gcd;

function gcd($a, $b)
{
    $x = $a;
    $y = $b;

    if ($y > $x) {
        [$x, $y] = [$y, $x];
    }

    return $y ? gcd($y, $x % $y) : $x;
}
