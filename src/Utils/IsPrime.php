<?php

namespace BrainGames\Utils\IsPrime;

function isPrime($num): bool
{
    if ($num < 2 || ($num > 2 && $num % 2 === 0)) {
        return false;
    }

    for ($i = 3, $limit = sqrt($num); $i <= $limit; $i += 2) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
