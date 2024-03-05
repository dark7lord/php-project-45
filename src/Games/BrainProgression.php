<?php

namespace BrainGames\Games\BrainProgression;

function generateParams(int $minLen = 5, int $maxLen = 10, int $minStep = 1, int $maxStep = 10): array
{
    $minStartNum = 0;
    $maxFinishNum = 50;
    $startNum = rand($minStartNum, $maxFinishNum);

    $step = rand($minStep, $maxStep);
    $length = rand($minLen, $maxLen);

    $arrProgression = [];

    for ($i = 0, $num = $startNum; $i < $length; $num += $step, $i++) {
        $arrProgression[] = $num;
    }

    $indexRightAnswer = array_rand($arrProgression);
    $rightAnswer = $arrProgression[$indexRightAnswer];
    $arrProgression[$indexRightAnswer] = "..";

    return [$arrProgression, $rightAnswer];
}

function makeQuestion(array $params): string
{
    [$arrProgression] = $params;
    return implode(" ", $arrProgression);
}

function getRightAnswer(array $params): string
{
    [, $rightAnswer] = $params;
    return $rightAnswer;
}
