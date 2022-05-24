<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
    <title>Skakacka</title>
    <link rel="stylesheet" href="css/form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<h1 class="header">Mini herní koutek</h1>




<div class="text">
       
    <div class="title">
        Registrační formulář
    </div>
    <div class="form">
     
        <form action="regphp.php" method="post">
            <div class="input_field">
                <label for="login">Login: </label>
                <input type="text" name="login"  class="input" required>
            </div>
            <div class="input_field">
                <label for="password">Heslo: </label>
                <input type="password" name="password"class="input" required>
            </div>
              <div class="input_field">
                <label for="passwordCheck">Kontrola hesla: </label>
                <input type="password" name="passCheck"  class="input" required>
            </div>
            <div class="input_field">
                <label for="name">Jméno: </label>
                <input type="text" name="name" class="input">
            </div>
            <div class="input_field">
                <label for="surname">Příjmení: </label>
                <input type="text" name="surname" class="input">
            </div >
             <div class="input_field">
                <label for="birthdate">Narozeniny: </label>
                <input type="date" name="birthdate" class="input">
            </div>
          
            <div class="input_field">   
              <label for="email">Email:</label>
               <input type="email" name="email" value="@" class="input" required>
            </div>
            <div class="buttons">
            <button class="button" type="submit" name="registrace">Registrovat</button>
            <button class="button" style="background-color:red;" onclick="window.location.href='index.php';">Zpět</button>
               </div>
        </form>
        
  </div>
</div>



<div class="pata"> Filip Lukeš 2021</div>



</body>
</html>

