<?php

namespace BrainGames\Games\BrainCalc;

function generateParams($minNum = 0, $maxNum = 100): array
{
    $num1 = rand($minNum, $maxNum);
    $num2 = rand($minNum, $maxNum);
    $operators = ['+', '-', '*'];
    $operator = $operators[array_rand($operators)];

    return [$num1, $num2, $operator];
}

function makeQuestion($arrParams): string
{
    [$num1, $num2, $operator] = $arrParams;
    return "$num1 $operator $num2";
}

function getRightAnswer($arrParams): string
{
    [$num1, $num2, $operator] = $arrParams;

    $actions = [
        '+' => fn($a, $b) =>  $a + $b,
        '-' => fn($a, $b) =>  $a - $b,
        '*' => fn($a, $b) =>  $a * $b,
    ];

    return $actions[$operator]($num1, $num2);
}
