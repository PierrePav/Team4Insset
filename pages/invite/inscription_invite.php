
<h2>Formulaire</h2>
<form method="post" action="index.php?page=inscription"> 
                 
 Nom : <input type="text" name="nom" ><br>
 Prénom : <input type="text" name="prenom" ><br>
 Adresse : <input type="text" name="adresse" ><br>
 Password : <input type="password" name="password" ><br>
 <input type="submit" value="Editer">
 <input type="reset" value="Annuler">
</form>
<?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) & isset($_POST['password']))
{
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$adresse = $_POST["adresse"];
	$password = $_POST["password"];
	
	$req = $bdd->prepare('INSERT INTO inscription(Nom, Prenom, Adresse, Password) VALUES(:nom, :prenom, :adresse, :password)');
	$req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
		'adresse' => $adresse,
		'password' => $password
			
	));
	echo 'L\'utilisateur a bien été ajouté !';
}
?>		
