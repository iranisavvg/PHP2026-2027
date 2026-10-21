<?php
$naslov    = "PHP dokument";
$autor     = "Ivana Ranisavljević";   
$opis      = "PHP je serverski jezik koji generira HTML ili JSON odgovor prema klijentu.";
$link_href = "https://hr.wikipedia.org/wiki/PHP";
$link_text = "Saznaj više o PHP-u";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Vježba 2-1 - PHP dokument s osnovnim CSS stilom">
  <meta name="author" content="<?php echo $autor; ?>">
  <title><?php echo $naslov; ?></title>
  <style>
    :root {
      --bg: #0f172a;      
      --card: #ffffff;    
      --text: #111827;    
      --muted: #6b7280;   
      --accent: #2563eb;  
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
    a { color: var(--text); text-decoration: none; }
    a:hover { text-decoration: underline; }
    .btn {
      display: inline-block;
      padding: 10px 16px;
      color: var(--accent);
      border: 1px solid var(--accent);
      border-radius: 10px;
      text-decoration: none;
      transition: background .15s, color .15s;
    }
    .btn:hover { background: var(--accent); color: #fff; text-decoration: none; }
    .btn:focus-visible { outline: 3px solid var(--accent); outline-offset: 2px; }
    .btn:active { opacity: .85; }
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
    <?php
    echo "<p>Ovu stranicu izradila je <strong>$autor</strong>.</p>";
    echo "<p>$opis</p>";
    ?>
    <p>
      <a class="btn" href="<?php echo $link_href; ?>" target="_blank"><?php echo $link_text; ?></a>
    </p>
    <footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
  </main>
</body>
</html>
<!-- Naziv datoteke: vjezba2-1.php -->