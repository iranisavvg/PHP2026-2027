<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>Igra (pogodi broj)</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Vježba 3-1 - igra pogodi broj (if naredba i funkcija rand)">
		<meta name="keywords" content="PHP, if, rand">
		<meta name="author" content="Ivana Ranisavljević">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
<body style="margin: 20px;">

	<?php
		$broj = '';     
		$poruka = '';   

		if (isset($_POST['num'])) {
			$broj = $_POST['num'];        
			$zamisljeniBroj = rand(1, 9);   

			if ($broj == $zamisljeniBroj) {
				$poruka = '<div class="btn btn-success">Pogodak, probaj ponovo!</div>';
			} else {
				$poruka = '<div class="btn btn-danger">Krivo, probaj ponovo!</div>';
			}
			$poruka .= '<p style="margin-top:10px;">Zamišljeni broj je ' . $zamisljeniBroj . '</p>';
		}

		print '
		<h1 style="margin-bottom:10px;font-size:14px;">Igra (pogodi broj)</h1>
		<form action="" method="post" id="pogodi">
			<div class="form-group">
				<label for="num">Upiši jedan broj od 1 do 9*</label>
				<input type="number" name="num" id="num" min="1" max="9" required="required" value="' . $broj . '" autofocus>
			</div>
			<div class="form-group">' . $poruka . '
			</div>
		</form>';
	?>
</body>
</html>
<!-- Naziv datoteke: pogodime.php -->
