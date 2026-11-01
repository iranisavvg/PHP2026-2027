<?php
$title = 'Zadatak <code>str_word_count</code>';
print '
<!DOCTYPE html>
<html lang="hr">
<head>
    <title>'.$title.'</title>
    <meta charset="utf-8">
    <meta name="author" content="Ivana Ranisavljević">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body { font-size: 16px;margin: 10px; font-family: "Times New Roman"; } 
        h1 { font-size:24px }
        p,label { display:block; }
        div {display:block;margin: 10px 0;}
    </style>
</head>
<body>
    <h1>'.$title.'</h1>
    <form action="" method="post">
        <p>U zadataku se traži da se ispiše koliko je riječi u rečenici. Koristite naredbu <code>str_word_count</code></p>
        <div>
            <label for="ulaz">Ulazni niz:</label>
            <input type="text" name="ulaz" size="80" value="">
        </div>
        <div>
            <input type="submit" value="ispiši broj riječi">
        </div>
    </form>';
    if (isset($_POST["ulaz"]) && $_POST["ulaz"] != '') {
        print '<p>ulazni niz:<code>' . $_POST["ulaz"] . '</code> sadrži ' . str_word_count($_POST["ulaz"], 0, 'čćžšđČĆŽŠĐ')
        . ' riječi.</p>';
    }
    print '
</body>
</html>';
?>
<!-- Naziv datoteke: str_word_count.php -->
