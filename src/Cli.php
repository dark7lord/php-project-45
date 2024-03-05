<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function welcome(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?', marker: ' ');
    line("Hello, %s!", $name);
    return $name;
}

function printDescription($description): void
{
    line($description);
}

function printRightAnswer($incorrectAnswer, $correctAnswer): void
{
    line("'%s' is wrong answer ;(. Correct answer was '%s'", $incorrectAnswer, $correctAnswer);
}

function askAnswer($question, $rightAnswer): bool|string
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

function finishGame($name, $result): void
{
    $finalSpeech = $result ? "Congratulations" : "Let's try again";
    line("%s, %s!", $finalSpeech, $name);
}
