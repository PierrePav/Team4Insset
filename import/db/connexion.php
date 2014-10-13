<?php

try{
	$db = new PDO('sqlite:base.sqlite');
}
catch(Exception $e){
	echo "Echec : " . $e->getMessage();
} 

?>