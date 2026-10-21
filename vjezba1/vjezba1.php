<?php
$naslov = "Moj prvi PHP dokument"; 
$autor = "Ivana Ranisavljević";             
?>
<!DOCTYPE html>
<html lang="hr">
    <head>
        <title><?php echo $naslov; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="Vježba 1 - prvi PHP dokument">
        <meta name="keywords" content="PHP, vježba, XAMPP">
        <meta name="author" content="<?php echo $autor; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        echo "<h1>$naslov</h1>";
        echo "<p>Ovu stranicu izradila je <strong>$autor</strong>.</p>";
        echo '<a href="https://www.index.hr" target="_blank">Posjeti INDEX.HR</a>';
        ?>
    </body>
</html>
<!-- Naziv datoteke: vjezba1.php -->
