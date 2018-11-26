<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paper Rock Scissors Game</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Asap:400,500,700" rel="stylesheet">

</head>

<body>
<header>
    <h1>Rock Paper Scissors</h1>
</header>
<div class="scoreboard">
    <div id="user-label" class="badge">
        user
    </div>
    <div id="computer-label" class="badge">
        comp
    </div>
    <span id="user-score">0</span>:<span id="computer-score">0</span>
</div>

<div class="result">
    <p>Click on an icon to start the game!</p>
</div>

<div class="choices">
    <div id="r" class="choice">
        <img src="img/1s.png" alt="Paper">
    </div>
    <div id="p" class="choice">
        <img src="img/2s.png" alt="Rock">
    </div>
    <div id="s" class="choice">
        <img src="img/3s.png" alt="Scissors">
    </div>
</div>

<p id="action">Make your move</p>
<div class="highscore">
    <input type="text" id="highscoreName">
    <button id="export">print dupek</button>
</div>
<script src="app.js" charset="utf-8"></script>
</body>

</html>