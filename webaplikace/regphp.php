
<?php

include 'config.php';



if(isset($_POST['registrace'])){
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $passCheck = md5($_POST['passCheck']);
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    
      
    if($password == $passCheck){
        
        $sql = "SELECT * FROM uzivatele WHERE login ='$login'";
        $result = mysqli_query($conn, $sql);                
        if(mysqli_num_rows($result)>0){
          
            die("<script>alert('Uživatel s tímto loginem již existuje!')</script>"); 
                    
        }else{
                       
            $sql = "INSERT INTO uzivatele(jmeno,prijmeni,datum_narozeni,login,heslo,email)"
                    . "VALUES ('$name','$surname','$birthdate','$login','$password','$email')";

            $result = mysqli_query($conn,$sql);

            if($result){

                header("Location:index.php");

            }else{

                echo"<script>alert('Chyba registrace!')</script>";

            }
        }
        
    }else{
         echo "<script>alert('Hesla nejsou stejná!')</script>";         
    }
    
}



?>
