<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Utils\Gcd\gcd;

function generateParams(int $minNum = 0, int $maxNum = 100): array
{
    $num1 = rand($minNum, $maxNum);
    $num2 = rand($minNum, $maxNum);

    return [$num1, $num2];
}

function makeQuestion(array $params): string
{
    [$num1, $num2] = $params;
    return "$num1 $num2";
}

function getRightAnswer(array $params): string
{
    [$num1, $num2] = $params;
    return gcd($num1, $num2);
}
