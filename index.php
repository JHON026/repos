<?php
  session_start();
  
  if(!isset($_SESSION["username"])){

    header("Location: login.php");
    exit(); 
  }
?>

<!DOCTYPE html>
<html lang="en" dir="itr">
<head>
	<title></title>
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
<body id="pop">
<div class="tete">
	<nav>
		<input type="checkbox" id="check">
		<label class="checkbtn" for="check">
			<i class="fas fa-bars"></i>
		</label>
	<label class="logo">Ningeundphoto</label>
	<ul>
		<li><a href="layout.php">Disconecting</a></li>
		<li><a class="bbb" href="#photo">Photo</a></li>
		<li><a class="ddd" href="#play">Play</a></li>
		<li><a class="aaa" href="#son">Music</a></li>
		<li><a class="fff" href="index.php">Home</a></li>
		
	</ul>
</nav>
 <p>Player 1: Chris</p>
<a href="mafor.html" style="color: red">lien vers ma page</a>
   <script>
   	 document.addEventListener("DOMContentLoaded", function() {
  function createParagraph() {
    let para = document.createElement('p');
    para.textContent = 'Vous avez cliqué sur le bouton!';
    document.body.appendChild(para);
  }

  const buttons = document.querySelectorAll('button');

  for(let i = 0; i < buttons.length ; i++) {
    buttons[i].addEventListener('click', createParagraph);
  }
});
   </script>
   <button>bbbb</button>
</div>
   <p>bienvenue <?php echo $_SESSION['username'];?>!</p>
   <center class="cont">
   		<h2 id="son">Musics</h2>
   		<video  controls="controls" preload="auto" poster="pixar.mp4" src="mavideo.mp4">
   		<source src="pixar.mp4">
   			<source src="pixar.ogg">
   				<source src="pixar.webm">
   	</video>
   </center>
<?php
echo date("Y-m-d H:i:s");
?>
<button type="text" onclick="getElementById('pop').style.background='black'">bouton</button>
</body>
</html>	