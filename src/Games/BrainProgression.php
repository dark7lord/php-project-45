<?php

namespace BrainGames\Games\BrainProgression;

function generateParams($minLen = 5, $maxLen = 10, $minStep = 1, $maxStep = 10): array
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

function makeQuestion($arrParams): string
{
    [$arrProgression] = $arrParams;
    return implode(" ", $arrProgression);
}

function getRightAnswer($arrParams): string
{
    [, $rightAnswer] = $arrParams;
    return $rightAnswer;
}
