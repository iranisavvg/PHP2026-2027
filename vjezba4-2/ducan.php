<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>Dućan (radno vrijeme)</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Vježba 4-2 - radno vrijeme dućana (if else uvjet i funkcija)">
		<meta name="keywords" content="PHP, funkcija, if else, date">
		<meta name="author" content="Ivana Ranisavljević">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
<body style="margin: 20px;">

	<?php
		function ducan($stanje = "otvoren") {
			echo "<p>Dućan je <strong>$stanje</strong>.</p>";
		}

		$dan = date("D");          
		$sat = date("H");          
		$datum = date("d.m.");     
		$datumGodina = date("d.m.Y");

		$praznici = array(
			"01.01." => "Nova godina",
			"06.01." => "Sveta tri kralja",
			"01.05." => "Praznik rada",
			"30.05." => "Dan državnosti",
			"22.06." => "Dan antifašističke borbe",
			"05.08." => "Dan pobjede i domovinske zahvalnosti i Dan hrvatskih branitelja",
			"15.08." => "Velika Gospa",
			"01.11." => "Svi sveti",
			"18.11." => "Dan sjećanja na žrtve Domovinskog rata",
			"25.12." => "Božić",
			"26.12." => "Sveti Stjepan"
		);

		$pomicniPraznici = array(
			"05.04.2026" => "Uskrs",
			"06.04.2026" => "Uskrsni ponedjeljak",
			"04.06.2026" => "Tijelovo",
			"28.03.2027" => "Uskrs",
			"29.03.2027" => "Uskrsni ponedjeljak",
			"27.05.2027" => "Tijelovo"
		);

		$praznik = "";
		foreach ($praznici as $datumPraznika => $naziv) {
			if ($datum == $datumPraznika) {
				$praznik = $naziv;
			}
		}
		foreach ($pomicniPraznici as $datumPraznika => $naziv) {
			if ($datumGodina == $datumPraznika) {
				$praznik = $naziv;
			}
		}

		echo "<h1 style='margin-bottom:10px;font-size:14px;'>Dućan (radno vrijeme)</h1>";
		echo "<p>Radno vrijeme: ponedjeljak - petak od 8 do 20 h, subota od 9 do 14 h, nedjeljom i praznicima zatvoreno.</p>";
		echo "<p>Danas je: " . $datumGodina . " (" . $dan . "), sada je " . $sat . " h.</p>";

		if ($praznik != "") {
			echo "<p>Danas je praznik: " . $praznik . ".</p>";
			ducan("zatvoren");
		}
		elseif ($dan == "Sun") {
			ducan("zatvoren");
		}
		elseif ($dan == "Sat") {
			if ($sat >= 9 && $sat < 14) {
				ducan();
			} else {
				ducan("zatvoren");
			}
		}
		else {
			if ($sat >= 8 && $sat < 20) {
				ducan();
			} else {
				ducan("zatvoren");
			}
		}
	?>
</body>
</html>
<!-- Naziv datoteke: ducan.php -->