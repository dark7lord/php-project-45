<?php

namespace BrainGames\Utils\Gcd;

function gcd(int $a, int $b): int
{
    $x = $a;
    $y = $b;

    if ($y > $x) {
        [$x, $y] = [$y, $x];
    }

    return $y !== 0 ? gcd($y, $x % $y) : $x;
}
