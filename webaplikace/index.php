
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
    <title>Home</title>
</head>
<body>

<h1 class="header">Mini herní koutek</h1>


<div class="login">
      
    <div class="form">
        <div class="pozadi">
        <form action="logphp.php" method="post">
            <div class="input_field" >
                <label for="login">Login: </label>
                <input type="text" name="user"  class="input" required>
            </div>
            <div class="input_field">
                <label for="password">Heslo: </label>
                <input type="password" name="password"class="input" required>
            </div>
              
            <button class="button" type="submit" name="login">Přihlásit</button>
           
      </form>
             <button class="button" onclick="window.location.href='registrace.php';">Registrace</button>
            </div>
   </div> 
 </div> 


<div class="pata"> Filip Lukeš 2021</div>
</body>
</html>
