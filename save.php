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

/*Find a div with id scoreboard*/
$html = file_get_html('sites/main.php');

$ret = $html->find('div[id=scoreboard]');

/** getting div content from html */
$dom = new DOMDocument();

$dom->loadHTML($html);

$xpath = new DOMXPath($dom);
$divContent = $xpath->query('string(//div[id="product_list"])'); //saved in divContent