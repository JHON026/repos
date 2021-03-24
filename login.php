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
session_start();

if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index.php");
  }else{
    $message="Le nom d'utilisateur ou le mot de passe est incorrect.";

    }
}
?>
<form  action="" method="post" name="login">

<h1>Connexion</h1>
<input type="text" name="username" placeholder="Nom d'utilisateur">

<input type="password" class="box-input" name="password" placeholder="Mot de passe">

<input type="submit" value="Connexion " name="submit" class="box-button">

<p>Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>

<?php if (! empty($message)) { ?>

    <p><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>