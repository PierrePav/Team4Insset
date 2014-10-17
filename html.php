<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blog team 2</title>

		<!--CSS-->
		<link rel="stylesheet" href="css/style.css">

		<!--JavaScript-->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/myCode.js"></script>

		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body >
		<div id="header">
		</div>
		<section id="section">
		<?php
		if(file_exists($page))require_once $page;
		else require_once 'pages/404.php';
		?>
		</section>
		<div id="footer">
		</div>
	</body>
</html>
