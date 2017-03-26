<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>

	<!-- base href -->
	<base href="https://kwntu.herokuapp.com/">
	<!-- <base href="../kwntu/"> -->

	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- FONTS -->

	<!-- Raleway font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Lora font -->
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

	<!-- Font Awesome! -->
	<link rel="stylesheet" type="text/css" href="vendors/fontawesome/styles/font-awesome.min.css">

	<?php
		#html vendor styles/scripts

		echo $GLOBALS['vendor'];
	?>	


	<!-- CUSTOM -->

	<!-- customized bootstrap -->
	<link rel="stylesheet" href="vendors/bootstrap/styles/bootstrap.custom.min.css">

	<!-- Bootstrap 4 cards -->
	<!-- <link rel="stylesheet" href="assets/styles/cards.css"> -->

	<!-- custom style -->
	<link rel="stylesheet" href="assets/styles/main.css">

	<!-- custom Javascript -->
	<script src="assets/scripts/main.js"></script>

</head>
<body>

	<?php
		#header/nav
		require_once('../src/templates/header.php');

		#main content
		echo $main;

		#footer
		require_once('../src/templates/footer.html');
	?>

</body>
</html>