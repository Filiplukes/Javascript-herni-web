<?php

include 'config.php';
  echo "kokot";
    
session_start();
header('Access-Control-Allow-Origin: *');  
if($_POST['insert']=='flappy'){
    

    $user = $_SESSION['user'];
    echo $user;
    $score = $_POST['score'];
      
    if(($score != "") and ($user != "")){
                        
            $sql = "INSERT INTO flappy(score,uzivatel_id)"
                    . "VALUES ('$score','$user')";

            $result = mysqli_query($conn,$sql);
             if(!$result){
                 
                echo "<script>alert('Chyba databáze!')</script>";   
             }
        
    }else{
         exit(1);        
    }
    exit(0);
}

if($_POST['insert']=='flappy'){
    

    $user = $_SESSION['user'];
    $score = $_POST['score'];
      
    if(($score != "") and ($user != "")){
                        
            $sql = "INSERT INTO flappy(score,uzivatel_id)"
                    . "VALUES ('$score','$user')";

            $result = mysqli_query($conn,$sql);
             if(!$result){
                 
                echo "<script>alert('Chyba databáze!')</script>";   
             }
        
    }else{
         exit(1);        
    }
    exit(0);
}
if($_POST['insert']=='padacimic'){
 
  
    $user = $_SESSION['user'];
    $score = $_POST['score'];
      
    if(($score != "") and ($user != "")){
                        
            $sql = "INSERT INTO padacimic(score,uzivatel_id)"
                    . "VALUES ('$score','$user')";

            $result = mysqli_query($conn,$sql);
             if(!$result){
                 
                echo "<script>alert('Chyba databáze!')</script>";   
             }
        
    }else{
         exit(1);        
    }
    exit(0);
}


if($_POST['insert']=='skakacka'){

    $user = $_SESSION['user'];
    $score = $_POST['score'];
      
    if(($score != "") and ($user != "")){
                      
            $sql = "INSERT INTO skakacka(score,uzivatel_id)"
                    . "VALUES ('$score','$user')";

            $result = mysqli_query($conn,$sql);
             if(!$result){
                 
                echo "<script>alert('Chyba databáze!')</script>";   
             }
        
    }else{
         exit(1);        
    }
    exit(0);
}


?>
