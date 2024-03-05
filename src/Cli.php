<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function welcome(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', marker: ' ');
    line("Hello, %s!", $name);
    return $name;
}

function printDescription(string $description): void
{
    line($description);
}

function printRightAnswer(string $incorrectAnswer, string|false $correctAnswer): void
{
    line("'%s' is wrong answer ;(. Correct answer was '%s'", $incorrectAnswer, $correctAnswer);
}

function askAnswer(string $question, string $rightAnswer): bool|string
{
    line("Question: %s", $question);
    $answer = prompt("Answer");

    if ($answer === $rightAnswer) {
        line('Correct!');
        return true;
    } else {
        return $answer;
    }
}

function finishGame(string $name, bool $isWin): void
{
    $finalSpeech = $isWin !== false ? "Congratulations" : "Let's try again";
    line("%s, %s!", $finalSpeech, $name);
}
