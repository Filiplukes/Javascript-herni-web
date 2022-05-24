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
    <title>padacimic</title>
    <link rel="stylesheet" href="css/padacimic.css">
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
    <h2>Padací míč</h2>

    <p>
        Unikej s míčkem dřív než tě to přimáčkne ke stropu. Ovládá se buď šipkami do stran, nebo pomocí tlačítek. Hru
        můžeš
        odstartovat mezerníkem.

    </p>
</div>

<div id="fallBall">
    <div id="character"></div>


</div>
<div class="control">
    <button onclick="start1()" class="button" id="control2">Start</button>
    <button onclick="move('L')" class="button" id="control">&larr;</button>
    <button onclick="move('R')" class="button" id="control">&rarr;</button>
    <label class="score">Skóre:</label><input class="pocitadlo" id="score" type="text" readonly>
</div>


<div class="pata"> Filip Lukeš 2021</div>

<dialog id="window" class="dialog">
    <h3 id="konec"></h3>
    <button id="exit" class="exit">Restart</button>
</dialog>


</body>
<script src="js/padacimic.js"></script>
</html>
