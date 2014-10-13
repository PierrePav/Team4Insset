<?php

if(!empty($_GET['page']))$page = $_GET['page'];
else $page = 'accueil';	
$page = 'pages/'.$role.'/'.$page.'_'.$role.'.php';

?>