<?php
$poruka = "";

if (isset($_POST["a"]) && isset($_POST["b"]) && is_numeric($_POST["a"]) && is_numeric($_POST["b"])) {
  $a = $_POST["a"];
  $b = $_POST["b"];
  $c = (3 * $a - $b) / 2;   
  $poruka = "<p>Vrijednost a: $a</p>"
          . "<p>Vrijednost b: $b</p>"
          . "<p>c = (3 * $a – $b) / 2 = <strong>$c</strong></p>";
} else {
  $poruka = "<p>Molimo upišite brojčane vrijednosti za a i b.</p>";
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vježba 2-4 - rezultat izračuna">
  <meta name="author" content="Ivana Ranisavljević">
  <title>Vježba 2-4 - rezultat</title>
  <style>
    body { font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif; margin: 30px; }
    p { margin: 6px 0; }
  </style>
</head>
<body>
  <header>
    <h1>Rezultat izračuna</h1>
  </header>
  <main>
    <?php echo $poruka; ?>
    <p><a href="index.html">Natrag na unos</a></p>
  </main>
  <footer>
    <p><small>Vježba 2-4</small></p>
  </footer>
</body>
</html>
<!-- Naziv datoteke: izracun.php -->
