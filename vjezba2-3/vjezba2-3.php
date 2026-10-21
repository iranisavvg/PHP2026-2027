<?php
$naslov = "PHP dokument — vježba2-3";
$autor  = "Ivana Ranisavljević";  
$opis   = "Ova stranica nadograđuje vježbu2-2: biramo temu (dark/light), odabiremo sliku i po želji prikazujemo opis.";

$tema  = "dark";
$slika = "php";

if (isset($_GET["tema"]) && ($_GET["tema"] == "dark" || $_GET["tema"] == "light")) {
  $tema = $_GET["tema"];
}
if (isset($_GET["slika"]) && ($_GET["slika"] == "php" || $_GET["slika"] == "server" || $_GET["slika"] == "code")) {
  $slika = $_GET["slika"];
}
$prikaziOpis = isset($_GET["opis"]);

$slikaPutanja = "img/" . $slika . ".jpg";

if ($tema == "light") {
  $bg     = "#e2e8f0";   
  $card   = "#ffffff";
  $text   = "#0f172a";
  $muted  = "#64748b";
  $accent = "#1d4ed8";
} else {
  $bg     = "#0f172a";  
  $card   = "#ffffff";
  $text   = "#111827";
  $muted  = "#6b7280";
  $accent = "#2563eb";
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vježba2-3 - forma (GET), izbor teme i slike">
  <meta name="author" content="<?php echo $autor; ?>">
  <title><?php echo $naslov; ?></title>
  <style>
    :root {
      --bg: <?php echo $bg; ?>;
      --card: <?php echo $card; ?>;
      --text: <?php echo $text; ?>;
      --muted: <?php echo $muted; ?>;
      --accent: <?php echo $accent; ?>;
    }
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
      font-size: 16px;
      background: var(--bg);
      color: var(--text);
    }
    .wrap {
      max-width: 720px;
      margin: 48px auto;
      background: var(--card);
      padding: 32px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,.08);
    }
    h1 { margin: 0 0 12px; font-size: 2rem; }
    p  { margin: 0 0 14px; line-height: 1.6; }
    .btn {
      display: inline-block;
      padding: 10px 16px;
      font: inherit;
      color: var(--accent);
      background: transparent;
      border: 1px solid var(--accent);
      border-radius: 10px;
      text-decoration: none;
      cursor: pointer;
      transition: background .15s, color .15s;
    }
    .btn:hover { background: var(--accent); color: #fff; }
    .btn:focus-visible { outline: 3px solid var(--accent); outline-offset: 2px; }
    .btn:active { opacity: .85; }
    .row { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 10px; }
    .slika { max-width: 100%; height: auto; display: block; border-radius: 10px; margin: 10px 0 16px; }
    fieldset { border: 1px solid #e5e7eb; border-radius: 10px; padding: 10px 12px; margin: 10px 0; }
    legend { padding: 0 6px; color: var(--muted); }
    label { display: block; margin: 6px 0; }
    footer { margin-top: 20px; font-size: .9rem; color: var(--muted); }
    @media (prefers-reduced-motion: reduce) {
      .btn { transition: none; }
    }
  </style>
</head>
<body>
  <main class="wrap">
    <header>
      <h1><?php echo $naslov; ?></h1>
    </header>
    <p>Ovu stranicu izradila je <strong><?php echo $autor; ?></strong>.</p>

    <img class="slika" src="<?php echo $slikaPutanja; ?>" alt="Slika: <?php echo $slika; ?>">

    <?php
    if ($prikaziOpis) {
      echo "<p>$opis</p>";
    }
    ?>

    <form method="get" action="vjezba2-3.php">
      <fieldset>
        <legend>Odaberi temu</legend>
        <label><input type="radio" name="tema" value="dark" <?php if ($tema == "dark") echo "checked"; ?>> Dark</label>
        <label><input type="radio" name="tema" value="light" <?php if ($tema == "light") echo "checked"; ?>> Light</label>
      </fieldset>

      <fieldset>
        <legend>Odaberi sliku</legend>
        <label for="slika">Slika:</label>
        <select id="slika" name="slika">
          <option value="php" <?php if ($slika == "php") echo "selected"; ?>>PHP</option>
          <option value="server" <?php if ($slika == "server") echo "selected"; ?>>Server</option>
          <option value="code" <?php if ($slika == "code") echo "selected"; ?>>Code</option>
        </select>
      </fieldset>

      <label><input type="checkbox" name="opis" value="1" <?php if ($prikaziOpis) echo "checked"; ?>> Prikaži opis</label>

      <div class="row">
        <button class="btn" type="submit">Primijeni odabir</button>
        <a class="btn" href="vjezba2-2.php">Natrag na vježbu2-2</a>
      </div>
    </form>

    <footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
  </main>
</body>
</html>
<!-- Naziv datoteke: vjezba2-3.php -->
