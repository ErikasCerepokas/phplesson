<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($x = 0; $x < $kates; $x++) {
    for ($z = 0; $z < $sunys; $z++) {
        $pavyko = rand(0, 1);
        if ($pavyko) {
            $katasuniai++;
            break;
        }
    }
}
$h1 = 'Katasuniu iseiga';
$h2 = "Dalyvavo $kates kates ir $sunys sunys";
$h3 = "Katasuniu iseiga: $katasuniai";
?>
<html>
    <head>
        <title>Uzduotis2</title> 
    </head>
    <body>
        <main>
            <h1><?php print $h1; ?></h1>
            <h2><?php print $h2; ?></h2>
            <h3><?php print $h3; ?></h3>
        </main>
    </body>
</html>