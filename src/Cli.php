<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function welcome()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?', marker: ' ');
    line("Hello, %s!", $name);
    return $name;
}

function printMessage($message)
{
    line($message);
}

function askAnswer($question, $rightAnswer, $name)
{
    line("Question: %s", $question);
    $answer = prompt("Answer");

    if ($answer === $rightAnswer) {
        line('Correct!');
        return true;
    } else {
        line("'$answer' is wrong answer ;(. Correct answer was '%s'.", $rightAnswer);
        line("Let's try again, %s!", $name);
        return false;
    }
}

function congratulate($name)
{
    line("Congratulations, %s!", $name);
}
