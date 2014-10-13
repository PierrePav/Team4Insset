<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Test</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require_once('connexion.php');
?>
<h2>Déposer un article dans la blog</h2>
<form method="post" action="index.php"> 
                 
 Titre : <input type="text" name="titre" ><br>
 Texte : <input type="text" name="texte" ><br>
 <input type="submit" value="Editer">
 <input type="reset" value="Annuler">
</form>
<?php
if(isset($_POST['titre']) && isset($_POST['texte']))
{
	$titre = $_POST["titre"];
	$texte = $_POST["texte"];
	
	$req = $bdd->prepare('INSERT INTO article(titre, texte) VALUES(:titre, :texte)');
	$req->execute(array(
		'titre' => $titre,
		'texte' => $texte
	));
	echo 'L\'article a bien été ajouté !';
}
?>		
</body>
</html>