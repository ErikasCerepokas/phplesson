<?php
$distance = rand(50, 250); //Km
$consumption = 7.5;// l/100km
$price_l = 1.3;// Eur/l

$kuras = round($distance * ($consumption / 100), 2); //Sunaudotas kuras
$bendra = round($kuras*$price_l, 2); //Sunaudoto kuro kaina

$skaiciuokle = 'Kelionės skaičiuoklė';
$kelias = "Nuvažiuota distancija: $distance";
$sunaudota_kuro = "Sunaudota $kuras l. kuro";
$kaina = "Kaina: $bendra pinigų";
?>
<html>
    <head>
        <title>UZDUOTIS#5</title>
    </head>
    <body>
        <h1><?php print $skaiciuokle; ?></h1>
            <ul>
                <li><?php print $kelias; ?></li>
                <li><?php print $sunaudota_kuro; ?></li>
                <li><?php print $kaina ?></li>
            </ul>      
    </body>
</html>
