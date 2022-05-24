<?php

include 'config.php';

session_start();



    if($_POST['get']='flappy'){
     
     $score = 5;
     $user = $_SESSION['user'];
         if(($user != "")){
             
             
          $sql = "SELECT * MAX(score) FROM flappy WHERE uzivatel_id ='$user'";
        $result = mysqli_query($conn, $sql);     
        
        
        if(mysqli_num_rows($result)>0){
            while($row= mysqli_fetch_array($result)){
                $score= $row['score'];
                $return_arr[]= array("score" => score);

                        }

             
            } else {$return_arr[]= array("score" => 0);}
         

   
         }
         
         
        echo json_encode($return_arr);

    }


?>



 
        
       
         
