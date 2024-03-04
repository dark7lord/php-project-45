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

function printMessage($message): void
{
    line($message);
}

function askAnswer($question, $rightAnswer, $name): bool|string
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
