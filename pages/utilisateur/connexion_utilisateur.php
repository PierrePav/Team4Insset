
<h2>Connexion</h2>
<form method="post" action=""> 

 Adresse : <input type="text" name="adresse" ><br>
 Password : <input type="password" name="password" ><br>
 <input type="submit" value="Editer">
 <input type="reset" value="Annuler">
</form>
<?php
if( isset($_POST['adresse']) & isset($_POST['password']))
{

	$adresse = $_POST["adresse"];
	$password = $_POST["password"];
	
	$req = $bdd->prepare('SELECT * FROM utilisateur where adresse = :adresse and password = :password)');
	$req->execute(array(
		'adresse' => $adresse,
		'password' => $password
			
	));
	echo 'L\'utilisateur est maintenant connecté !';
}
?>