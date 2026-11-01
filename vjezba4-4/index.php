<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>Prosti brojevi</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Vježba 4-4 - funkcija koja provjerava je li broj prost">
		<meta name="keywords" content="PHP, funkcija, for petlja, prosti brojevi">
		<meta name="author" content="Ivana Ranisavljević">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
<body style="margin: 20px;">

	<?php
		function ProstiBroj($broj) {
			if ($broj <= 1) {
				return false;
			}
			for ($i = 2; $i < $broj; $i++) {
				if ($broj % $i == 0) {
					return false;   
				}
			}
			return true;   
		}

		echo "<h1 style='margin-bottom:10px;font-size:14px;'>Prosti brojevi manji od 100</h1>";
		echo "<p>Prosti brojevi su: </p><p>";

		$ukupno = 0;
		for ($i = 1; $i < 100; $i++) {
			if (ProstiBroj($i)) {
				echo $i . " ";
				$ukupno++;
			}
		}

		echo "</p>";
		echo "<p>Ukupno prostih brojeva manjih od 100: " . $ukupno . "</p>";
	?>
</body>
</html>
<!-- Naziv datoteke: index.php -->
