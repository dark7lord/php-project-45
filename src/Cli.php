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

function printRightAnswer(string $incorrectAnswer, string $correctAnswer): void
{
    line("'%s' is wrong answer ;(. Correct answer was '%s'", $incorrectAnswer, $correctAnswer);
}

function askAnswer(string $question, string $rightAnswer): string
{
    line("Question: %s", $question);
    return prompt("Answer");
}

function praise(): void
{
    line("Correct!");
}

function finishGame(string $name, bool $isWin): void
{
    $finalSpeech = $isWin !== false ? "Congratulations" : "Let's try again";
    line("%s, %s!", $finalSpeech, $name);
}
