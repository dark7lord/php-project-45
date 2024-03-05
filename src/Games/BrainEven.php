<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\runGame;

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
    return $num % 2 === 0 ? 'yes' : 'no';
}
