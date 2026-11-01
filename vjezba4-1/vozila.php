<!DOCTYPE HTML>
<html lang="hr">
	<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="author" content="Ivana Ranisavljević">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
	<title>Vozila</title>
	<style>
	
	body{
		font-family: 'Open Sans Condensed', arial, sans;
		font-size: 110%;
		color: #232323;
		width: 50%;
		margin: 0 auto;
		margin-top: 2em;
	}
		
	input[type="number"]{
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		outline: none;
		display: block;
		width: 100%;
		padding: 7px;
		border: none;
		border-bottom: 1px solid #ddd;
		background: transparent;
		margin-bottom: 10px;
		font: 16px Arial, Helvetica, sans-serif;
		height: 45px;
		font-family: 'Open Sans Condensed', arial, sans;
	}	
	label {
		width: 140px;
		display:inline-block;
	}
	.block {
		margin: 4px 0;
	}
	input[type="submit"] {
		-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
		-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
		box-shadow: inset 0px 1px 0px 0px #45D6D6;
		background-color: #2CBBBB;
		border: 1px solid #27A0A0;
		display: inline-block;
		cursor: pointer;
		color: #FFFFFF;
		font-family: 'Open Sans Condensed', arial, sans;
		font-size: 14px;
		padding: 8px 18px;
		text-decoration: none;
		text-transform: uppercase;
	}
	li {
		list-style-type: none;
	}
	</style>
	</head>

	<body>
	<?php
		echo "<p>Označi vozilo:</p>";
		$cars = array("Audi", "BMW", "Renault", "Citroen");

		echo "<form method='POST' action='' id='cars'>
		<ul>";
		foreach ($cars as $car) {
			echo '<li><input type="radio" name="car" value="' . $car . '" required> ' . $car . '</li>';
		}

		echo "
		</ul>
		<p><input type='submit' value='pošalji'></p>
		</form>";

		if (isset($_POST['car'])) {
			echo "<p>Odabrali ste vozilo: <strong>" . $_POST['car'] . "</strong></p>";
		}
	?>
	</body>
</html>
<!-- Naziv datoteke: vozila.php -->