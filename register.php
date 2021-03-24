<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" type="text/css" href="main.css">
  <script type="text/javascript" src="app.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Fenix" rel="stylesheet" type="text/css"> 
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.7/angular.min.js"></script>

</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
  

  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 


  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  

  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  


    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
  

    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
    <h1 class="box-title">S'inscrire</h1>

  <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text"  name="email" placeholder="Email" required />

    <input type="password"  name="password" placeholder="Mot de passe" required />

    <input type="submit" name="submit" value="S'inscrire"  />
    
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>