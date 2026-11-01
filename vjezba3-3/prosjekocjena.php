<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<meta name="description" content="Vježba 3-3 - izračun ocjene iz kolokvija">
		<meta name="author" content="Ivana Ranisavljević">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Prosjek ocjena</title>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<h1>Izračun ocjene iz kolokvija</h1>
		<p>Potrebno je napraviti formu za izračun ocjene iz kolokvija. Imamo uvjet da moramo izračunati srednju ocjenu iz prvog i drugog kolokvija. Ukoliko je jedan od kolokvija negativan, krajnja ocjena je negativna. Drugi uvjet je da ocjena ne smije biti manja od 1 i veća od 5.</p>
		<?php
		if (!isset($_POST['_action_'])) { $_POST['_action_'] = FALSE; }

		if ($_POST['_action_'] == FALSE) {
			print '
			<form action="" method="post">
				<input type="hidden" id="_action_" name="_action_" value="TRUE">
				<div class="block">
					<label for="a">Ocjena I. kolokvija:</label>
					<input type="number" id="a" name="a" min="1" max="5" required>
				</div>
				<div class="block">
					<label for="b">Ocjena II. kolokvija:</label>
					<input type="number" id="b" name="b" min="1" max="5" required>
				</div>
				<div class="block">
					<input type="submit" value="Pošalji">
				</div>
			</form>';
		}
		else if ($_POST['_action_'] == TRUE) {
			print '<div class="izlaz">';

			if (!isset($_POST['a']) || !isset($_POST['b']) || !is_numeric($_POST['a']) || !is_numeric($_POST['b'])) {
				echo '<p class="greska">Krivi unos! Upišite obje ocjene (brojevi od 1 do 5).</p>';
			}
			else {
				$ocjene = array($_POST['a'], $_POST['b']);

				if (($ocjene[0] < 1 || $ocjene[1] < 1) || ($ocjene[0] > 5 || $ocjene[1] > 5)) {
					echo '<p class="greska">Krivi unos!!!</p>';
					echo "<p>Vrijednosti kolokvija moraju biti u rasponu od 1 do 5. Vaš unos je: I. kolokvij: $ocjene[0], II. kolokvij: $ocjene[1]</p>";
				}
				elseif ($ocjene[0] == 1 || $ocjene[1] == 1) {
					$prosjek = ($ocjene[0] + $ocjene[1]) / 2;
					echo "<p>Ocjena I. kolokvija: $ocjene[0]</p>";
					echo "<p>Ocjena II. kolokvija: $ocjene[1]</p>";
					echo '<hr>';
					echo "<p>Srednja ocjena iz predmeta: $prosjek</p>";
					echo '<p>Konačna ocjena iz predmeta: <span class="negativno">1 (nedovoljan)</span></p>';

					if ($ocjene[0] == 1 && $ocjene[1] > 1) {
						echo '<p>Student mora ponavljati I. kolokvij.</p>';
					}
					elseif ($ocjene[1] == 1 && $ocjene[0] > 1) {
						echo '<p>Student mora ponavljati II. kolokvij.</p>';
					}
					else {
						echo '<p>Student mora ponavljati oba kolokvija.</p>';
					}
				}
				else {
					$prosjek = ($ocjene[0] + $ocjene[1]) / 2;
					echo "<p>Ocjena I. kolokvija: $ocjene[0]</p>";
					echo "<p>Ocjena II. kolokvija: $ocjene[1]</p>";
					echo '<hr>';
					echo "<p>Srednja ocjena iz predmeta: $prosjek</p>";
					echo '<p>Konačna ocjena iz predmeta: <span class="pozitivno">' . round($prosjek) . '</span></p>';
				}
			}

			print '</div>';
			print '<p><a href="prosjekocjena.php">Povratak</a></p>';
		}
		?>
	</body>
</html>
<!-- Naziv datoteke: prosjekocjena.php -->
