<?php

namespace BrainGames\Games\BrainEven;

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
    return $num % 2 === 0 ? 'yes' : 'no';
}
