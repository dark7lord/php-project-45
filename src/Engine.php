<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\askAnswer;
use function BrainGames\Cli\finishGame;
use function BrainGames\Cli\praise;
use function BrainGames\Cli\printDescription;
use function BrainGames\Cli\printRightAnswer;
use function BrainGames\Cli\welcome;

function runGame(
    string $description,
    callable $fnGetParams,
    callable $fnMakeQuestion,
    callable $fnGetRightAnswer,
    int $attempts = 3
): void {
    $name = welcome();
    printDescription($description);

    $isWin = true;

    while ($attempts) {
        $arrParams = $fnGetParams();
        $question = $fnMakeQuestion($arrParams);
        $rightAnswer = (string) $fnGetRightAnswer($arrParams);
        $answer = askAnswer($question, $rightAnswer);

        if ($answer !== $rightAnswer) {
            printRightAnswer($answer, $rightAnswer);
            $isWin = false;
            break;
        }
        praise();
        $attempts -= 1;
    }

    finishGame($name, $isWin);
}
