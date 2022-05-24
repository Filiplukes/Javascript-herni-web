<?php

include 'config.php';
session_start();
if(!isset($_SESSION['user'])){
   
    header("Location:index.php");  
}
     
     $user = $_SESSION['user'];

     if(($user != "")){          
        $sql = "SELECT * FROM flappy order by score desc limit 30";
        $result = mysqli_query($conn, $sql);
        
        $i=0;
                    
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){           
                $flappy[$i]["score"]=$row['score'];
                
                 $hrac =$row['uzivatel_id'];
                 $sql = "SELECT jmeno,prijmeni FROM uzivatele WHERE uzivatele_id='$hrac'";
                 $hrac = mysqli_query($conn, $sql);
                
                 
                    if(mysqli_num_rows($hrac)>0){
                        $row= mysqli_fetch_assoc($hrac);
                       $flappy[$i]["jmeno"] = $row['jmeno'];
                       $flappy[$i]["prijmeni"] = $row['prijmeni'];
                        
                    }
                  $i=$i+1;              
                        
                }
               
                       
        }
           
    }
   
     $user = $_SESSION['user'];
     if(($user != "")){          
        $sql = "SELECT * FROM padacimic order by score desc limit 30";
        $result = mysqli_query($conn, $sql);
                 
     $i=0;
                    
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){           
                $padacimic[$i]["score"]=$row['score'];
                
                 $hrac =$row['uzivatel_id'];
                 $sql = "SELECT jmeno,prijmeni FROM uzivatele WHERE uzivatele_id='$hrac'";
                 $hrac = mysqli_query($conn, $sql);
                
                 
                    if(mysqli_num_rows($hrac)>0){
                        $row= mysqli_fetch_assoc($hrac);
                       $padacimic[$i]["jmeno"] = $row['jmeno'];
                       $padacimic[$i]["prijmeni"] = $row['prijmeni'];
                        
                    }
                  $i=$i+1;                          
                }                    
        }        
    }
         $user = $_SESSION['user'];
        if(($user != "")){          
        $sql = "SELECT * FROM skakacka order by score desc limit 30";
        $result = mysqli_query($conn, $sql);
                 
             $i=0;
                    
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){           
                $skakacka[$i]["score"]=$row['score'];
                
                 $hrac =$row['uzivatel_id'];
                 $sql = "SELECT jmeno,prijmeni FROM uzivatele WHERE uzivatele_id='$hrac'";
                 $hrac = mysqli_query($conn, $sql);
                
                 
                    if(mysqli_num_rows($hrac)>0){
                        $row= mysqli_fetch_assoc($hrac);
                       $skakacka[$i]["jmeno"] = $row['jmeno'];
                       $skakacka[$i]["prijmeni"] = $row['prijmeni'];
                        
                    }
                  $i=$i+1;                          
                }                    
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
    <link rel="stylesheet" href="css/topHraci.css">
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
        <h2>Top hráči</h2>
        <p>
            Tabulky nejlepších 30 hráčů z každé hry. 
        </p>
    </div>


<div class="score">
    <h3>Skákačka</h3>   
   <table class="tableScore">
      <tr>
        
        <th>Jméno</th>
        <th>Příjmení</th>
        <th>Skóre</th>
      </tr>
     <?php   
      foreach ($skakacka as $fla){
        echo  "<tr>";
        echo "<div > <td>$fla[jmeno]</td></div>";
        echo "<div > <td>$fla[prijmeni]</td></div>";
        echo "<div > <td>$fla[score]</td></div>";
        echo"</tr>";             
      }    
      ?>
    </table>

</div>
<div class="score">
     <h3>Flappy</h3>
    <table class="tableScore">
      <tr>
        <th>Jméno</th>
        <th>Příjmení</th>
        <th>Skóre</th>
      </tr> 
      <?php   
      foreach ($flappy as $fla){
        echo  "<tr>";
        echo "<div > <td>$fla[jmeno]</td></div>";
        echo "<div > <td>$fla[prijmeni]</td></div>";
        echo "<div > <td>$fla[score]</td></div>";
        echo"</tr>";                 
      }
      ?>
     
    </table>

</div>
<div class="score">
    <h3>Padací míč</h3>
    <table class="tableScore">
      <tr>
         <th>Jméno</th>
        <th>Příjmení</th>
        <th>Skóre</th>
      </tr>
           <?php 
         
      foreach ($padacimic as $fla){
        echo  "<tr>";
        echo "<div > <td>$fla[jmeno]</td></div>";
        echo "<div > <td>$fla[prijmeni]</td></div>";
        echo "<div > <td>$fla[score]</td></div>";
        echo"</tr>";             
      }    
      ?>
    </table>

</div>



<div class="pata"> Filip Lukeš 2021</div>
</body>
</html>
