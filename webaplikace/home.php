<?php
include 'config.php';
session_start();
if(!isset($_SESSION['user'])){
   
    header("Location:index.php");  
}
     
     $user = $_SESSION['user'];
     
     

     if(($user != "")){          
        $sql = "SELECT MAX(score) FROM flappy WHERE uzivatel_id ='$user'";
        $result = mysqli_query($conn, $sql);
                 
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
                    
                $scoreFlappy= $row[0];
                       
        }} 
           
    }
 
   
     $user = $_SESSION['user'];
     if(($user != "")){          
        $sql = "SELECT MAX(score) FROM padacimic WHERE uzivatel_id ='$user'";
        $result = mysqli_query($conn, $sql);
                 
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
        
                $scorePadacimic= $row[0];
                  
        }}
           
    }
         $user = $_SESSION['user'];
        if(($user != "")){          
        $sql = "SELECT MAX(score) FROM skakacka WHERE uzivatel_id ='$user'";
        $result = mysqli_query($conn, $sql);
                 
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
      
                $scoreSkakacka= $row[0];            
             
        }}        
    }

     IF($scoreFlappy == ""){$scoreFlappy = 0;}
     IF($scoreSkakacka == "") {$scoreSkakacka = "0";}
     IF($scorePadacimic == ""){$scorePadacimic = "0";}
    
   
    if(isset($_POST['delete'])) {
           echo $user; 
       
        
        $sql = "DELETE FROM uzivatele WHERE uzivatele_id ='$user'";
    
        if(mysqli_query($conn, $sql)){
            session_destroy();
            header("Location:index.php");
            
        }else{
            echo "Mazání se nepovedlo! Kontaktujte správce.";
        }
        
	 
	}
     
     
     
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="cs">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Home</title>
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
        <h2>Hlavní stránka</h2>

        <p>
            Rozhodl jsem se, že udělám ménší herní koutek. Toto téma jsem si vybral, protože nějaké zkušenosti s HTML
            javascriptem a css mám.
            Zároveň jsem chtěl použít tyto technologie jiným způsonem než jsem zvyklý.
            Vybral jsem si tři hry. Inspiraci k těmto hrám jsem hledal na internetu. Třeba se i najde někdo, kdo si je
            vyzkouší a aspoň ho na pár sekund zabaví.
            Pokud se tak stane, budu rád, že tato práce bude víc než pro zápočet.
        </p>
    </div>


<div class="score">
    
    
    
    <table class="tableScore">
      <tr>
        <th>Hra</th>
        <th>Score</th>
      </tr>
      <tr>
        <td>Flapy Bird</td>
      <div > <td><?php echo $scoreFlappy?></td></div>
      </tr>
      <tr>
        <td>Padací míč</td>
        <td><?php echo $scorePadacimic?></td>
      </tr>
       <tr>
        <td>Skakačka</td>
        <td><?php echo $scoreSkakacka?></td>
      </tr>
    </table>

</div>

       
<div style="width: 100%; float: left;">
    
    
    <form method="post"> 

		  <button class="button" style="background-color:red;" name="delete" >Smaž účet</button>
	</form> 

          
</div>

<div class="pata"> Filip Lukeš 2021</div>
</body>
</html>
