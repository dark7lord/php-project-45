<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Utils\Gcd\gcd;

function generateParams($minNum = 0, $maxNum = 100): array
{
    $num1 = rand($minNum, $maxNum);
    $num2 = rand($minNum, $maxNum);

    return [$num1, $num2];
}

function makeQuestion($arrParams): string
{
    [$num1, $num2] = $arrParams;
    return "$num1 $num2";
}

function getRightAnswer($arrParams): string
{
    [$num1, $num2] = $arrParams;
    return gcd($num1, $num2);
}
