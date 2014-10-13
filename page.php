<?php
if ($role == 'invite')$page = 'accueil';
else{
	if(!empty($_GET['page']))$page = $_GET['page'];
	else $page = 'categories';	
}
$page = 'pages/'.$role.'/'.$page.'_'.$role.'.php';
?>