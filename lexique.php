<?php
include "glossaire.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>LexiqueRandom</title>
	<link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="lexique.css">	 
</head>
<body>
	<div class="title">
		<h1>&rarr; Lexique du Monde d'Harry Potter	&larr;
			<p class="six">
				<a href="profil.php">
				<img src="home.png" alt="accueil" width="5%">
				</a>
			</p>
		</h1>
	</div>
	<div class="def">
		<div id="titre">
			<?php
				$index = rand(0, count($lexique) - 1);
				echo $lexique[$index]['title'] . "<br>" . "<br>";
			?>
		</div>
		<br>
		<div class="contenu">
			<?php
			echo $lexique[$index]['description'];
			echo "<br>";
		?>
		</div>
	</div>
	<div class="push">
		<a href="" title="Rafraichir...">
			<input type="button" class="button" name="button" value="Glossaire aléatoire"> 
		</a>
	</div>	
</body>
</html>