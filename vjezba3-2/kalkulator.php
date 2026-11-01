<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>Kalkulator</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Vježba 3-2 - kalkulator (switch naredba)">
		<meta name="keywords" content="PHP, switch, kalkulator">
		<meta name="author" content="Ivana Ranisavljević">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
<body style="margin: 20px;">

	<?php
		$first_num = '';
		$second_num = '';
		$operator = '';
		$result = '';

		if (isset($_POST['first_num']) && isset($_POST['second_num']) && isset($_POST['operator'])) {
			$first_num = $_POST['first_num'];
			$second_num = $_POST['second_num'];
			$operator = $_POST['operator'];
		}

		if (is_numeric($first_num) && is_numeric($second_num)) {
			switch ($operator) {
				case "+":
					$result = $first_num + $second_num;
					break;
				case "-":
					$result = $first_num - $second_num;
					break;
				case "*":
					$result = $first_num * $second_num;
					break;
				case "/":
					if ($second_num == 0) {
						$result = "Dijeljenje s nulom nije moguće!";
					} else {
						$result = $first_num / $second_num;
					}
					break;
				default:
					$result = "Nepoznata operacija!";
			}
		}

		print '
		<h1 style="margin-bottom:10px;font-size:14px;">Kalkulator (Switch naredba)</h1>
		<form action="" method="post" id="calculator">
			<div class="form-group">
				<label for="first_num">Upiši prvi broj *</label>
				<input type="number" step="any" name="first_num" id="first_num" required="required" value="' . $first_num . '">
			</div>
			<div class="form-group">
				<label for="second_num">Upiši drugi broj *</label>
				<input type="number" step="any" name="second_num" id="second_num" required="required" value="' . $second_num . '">
			</div>
			<div class="form-group">
				Rezultat: ' . $result . '
			</div>
			<input type="submit" name="operator" value="+" class="btn btn-secondary">
			<input type="submit" name="operator" value="-" class="btn btn-secondary">
			<input type="submit" name="operator" value="*" class="btn btn-secondary">
			<input type="submit" name="operator" value="/" class="btn btn-secondary">
		</form>';
	?>
</body>
</html>
<!-- Naziv datoteke: kalkulator.php -->