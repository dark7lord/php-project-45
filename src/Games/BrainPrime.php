<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Utils\IsPrime\isPrime;

function generateParams($minNum = 0, $maxNum = 100): array
{
    return [rand($minNum, $maxNum)];
}

function makeQuestion($arrParams): string
{
    [$num] = $arrParams;
    return "$num";
}

function getRightAnswer($arrParams): string
{
    [$num] = $arrParams;
    return isPrime($num) ? 'yes' : 'no';
}
