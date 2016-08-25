<!DOCTYPE  html>
<head>
	<meta charset="utf-8">
	<link href="reset.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
	<link rel="icon" href="img/logo.jpg" type="image/x-icon">
	<title>Main</title>
<script src="jquery-1.11.3.min.js"></script>
<script src="script.js"></script>
</head>
<body>
<div id="wrapper">
	<div class="btn_up">&uarr;</div>
	<?php require_once('settings.php');
	include ('header.php');
	include ('blog.php');
	include ('footer.php');
	?>
</div>
</body>