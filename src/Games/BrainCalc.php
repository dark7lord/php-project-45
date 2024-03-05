<?php

namespace BrainGames\Games\BrainCalc;

function generateParams(int $minNum = 0, int $maxNum = 100): array
{
    $num1 = rand($minNum, $maxNum);
    $num2 = rand($minNum, $maxNum);
    $operators = ['+', '-', '*'];
    $operator = $operators[array_rand($operators)];

    return [$num1, $num2, $operator];
}

function makeQuestion(array $params): string
{
    [$num1, $num2, $operator] = $params;
    return "$num1 $operator $num2";
}

function getRightAnswer(array $params): string
{
    [$num1, $num2, $operator] = $params;

    $actions = [
        '+' => fn($a, $b) =>  $a + $b,
        '-' => fn($a, $b) =>  $a - $b,
        '*' => fn($a, $b) =>  $a * $b,
    ];

    return $actions[$operator]($num1, $num2);
}
