<?php
Session_start();
if(!isset($_SESSION['user'])){
    
    header("Location:index.php");  
}

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
    <title>Flappy Bird</title>
    <link rel="stylesheet" href="css/flapyBird.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<h1 class="header">Mini herní koutek</h1>
<nav class="menu">
    <ul>
        <li><a href="home.php">Hlavní stránka</a></li>
        <li><a href="padacimic.php">Padací míč</a></li>
        <li><a href="skakacka.php">Skákačka</a></li>
        <li><a href="flapybird.php">Flappy Bird</a></li>
        <li><a href="tophraci.php">Žebříček</a></li>
        <li><a href='logphp.php?fn=logout'>Odhlásit</a></li>
    </ul>
</nav>
<div class="text">
    <h2>Napodobenina flappy bird</h2>

    <p>
        Hra inspirovaná hrou flappy. Úkolem zde he prolítnout červeným pásmem. Pokud proletíš zeleným končíš.
        Skákat se dá buď šipkou nahoru, nebo buttonem Skoč. Pokud skočíš, tvoje herní kostička vyskočí a začne postupně
        klesat.
        Toto klesání je pomalejší než samotný skok, tak neskákej výš než je potřeba.

    </p>

</div>

<div id="jumpBall">
    <div id="character"></div>
    <div id="block"></div>
    <div id="hole"></div>
    <div id="block1"></div>
    <div id="hole1"></div>

</div>


<div class="control">

    <button class="button" onclick="start1()" id="control2">Start</button>
    <button class="button" onclick="jump()" hidden id="control">Skoč</button>

    <label class="score">Skóre:</label><input class="pocitadlo" id="score" type="text" readonly>

</div>

<div class="pata"> Filip Lukeš 2021</div>


<dialog id="window" class="dialog">
    <h3 id="konec">Konec</h3>
    <button id="exit" class="exit">Restart</button>
</dialog>

</body>
<script src="js/flapyBird.js"></script>
</html>