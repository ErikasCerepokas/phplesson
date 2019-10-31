<?php
$bin_vol = 40;
$bin_heap_vol = rand(1, 15);
$trash_per_day = 15;

$atsakymas = floor(($bin_vol + $bin_heap_vol) / $trash_per_day);

$siuksliu_prog = "Šiuklšių prognozė";
$siukslines_turis = "Turima šiukšlinė - $bin_vol litrų";
$gerai_kol = "Žmona nieko nesako, kol kaupas neviršija $bin_heap_vol litrų";
$isvada = "Išvada: Nieko nedarysiu $atsakymas dienų.";
?>
<html>
    <head>
        <title>UZDUOTIS#4</title>
    </head>
    <body>
        <h1><?php print $siuksliu_prog; ?></h1>
        <p><?php print $siukslines_turis; ?></p>
        <p><?php print $gerai_kol; ?></p>
        <h3><?php print $isvada; ?></h3>
    </body>
</html>
