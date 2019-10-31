<?php
$skola = rand(1, 100);
$graza1 = rand(101, 200);
$graza2 = rand(201, 300);

$h1 = 'Skolos skaičiuoklė';
$h2 = "Jei paėmei $skola jievrų";
$h3 = "Su dviem kabančiais grąžinsi $graza2";
$h4 = "Su vienu kabančiu grąžinsi $graza1";
?>
<html>
    <head>
        <title>UZDUOTIS#3</title>
    </head>
    <body>
        <div>
            <h1><?php print $h1; ?></h1>
            <h2><?php print $h2; ?></h2>
            <h3><?php print $h3; ?></h3>
            <h3><?php print $h4; ?></h3>
        </div>
    </body>
</html>
