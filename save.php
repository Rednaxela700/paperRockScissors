<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 11/26/18
 * Time: 1:09 PM
 */
if (file_exists('highscore.txt')) {
    $highScoreNum = file_get_contents('highscores.txt');
} else {
    $highScoreNum = 1;
    file_put_contents($highScoreNum, '.txt');
}
$allScores = '';
for ($scoresNum = 1; $scoresNum <= $highScoreNum; $scoresNum++) {
    $directoryPath = 'highscores/' . $highScoreNum . '.txt';

    if (file_exists($directoryPath)) {
        $highScore = file_get_contents($directoryPath);
        //highscores output
        $allScores .= $highScore;
        //show a hr between
        $allScores .= '<hr>';
    }
};