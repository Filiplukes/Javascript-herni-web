<!DOCTYPE html>

<?php
Session_start();
if(!isset($_SESSION['user'])){
    
    header("Location:index.php");  
}

?>

<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
    <title>Skakacka</title>
    <link rel="stylesheet" href="css/skakacka.css">
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
    <h2>Skákačka</h2>

    <p>
        Uskakuj překážkám, které se ryhle blíží. Pokud se překážky dotkneš končíš.
        Použij mezerník, nebo tlačítko pro skok.


    </p>
</div>
<div id="jumper">
    <div id="character"></div>
    <div id="block"></div>

</div>
<div class="control">
    <button class="button" onclick="jump()" id="control">Start</button>
    <label class="score">Skóre:</label><input class="pocitadlo" id="score" type="text" readonly>
</div>


<div class="pata"> Filip Lukeš 2021</div>

<dialog id="window" class="dialog">
    <h3 id="konec"></h3>
    <button id="exit" class="exit">Restart</button>
</dialog>

</body>
<script src="js/skakacka.js"></script>
</html>
