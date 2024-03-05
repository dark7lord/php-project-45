<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Utils\IsPrime\isPrime;

function generateParams(int $minNum = 0, int $maxNum = 100): array
{
    return [rand($minNum, $maxNum)];
}

function makeQuestion(array $params): string
{
    [$num] = $params;
    return "$num";
}

function getRightAnswer(array $params): string
{
    [$num] = $params;
    return isPrime($num) ? 'yes' : 'no';
}
