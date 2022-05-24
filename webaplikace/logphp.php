<?php

include 'config.php';

session_start();

if(isset($_POST['login'])){
     
      
    $login = $_POST['user'];
    $password = md5($_POST['password']);
       
    if(($login != "") and ($password != "")){
        
        $sql = "SELECT * FROM uzivatele WHERE login ='$login' AND heslo='$password'";
        $result = mysqli_query($conn, $sql);                
        if(mysqli_num_rows($result)>0){
            $row= mysqli_fetch_assoc($result);
            $_SESSION['user'] = $row['uzivatele_id'];
            header("Location:home.php");     
                    
        }else{
          
             
             header("Location:index.php");  
              return; 
        }
        
    }else{
         echo "<script>alert('Vyplň přihlašovací údaje!')</script>";         
    } 
    
     
}




if ($_GET['fn'] == "logout"){
     session_destroy();
     header("Location:index.php");  
 
} 


?>
