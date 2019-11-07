<?php
$days = 365;
$pack_price = 3.50;
$pack = 20;
$data = date('N', strtotime('now'));
$count_ttl = 0;

for ($x = 1; $x < $days; $x++) {
    $data = date('N', strtotime("+ $x days"));
    if ($data < 5) {
        $cigs_mon_fri = rand(3, 20);
        $count_ttl += $cigs_mon_fri;
    } else if ($data === 6) {
        $cigs_sat = rand(15, 30);
        $count_ttl += $cigs_sat;
    } else if ($data === 7) {
        $cigs_sun = rand(1, 5);
        $count_ttl = $cigs_sun;
    }
}
//Skaičiavimas cigarėčių
$count = $count_ttl / $pack;
$price_ttl = ceil($count * $pack_price);
//Tekstas
$h1 = 'Mano dūmų skaičiuoklė';
$h2 = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";
?>
<html>
    <head>
        <title>Uzduotis4</title> 
    </head>
    <body>
        <main>
            <h1><?php print $h1 ?></h1>
            <h2><?php print $h2 ?></h2>
        </main>
    </body>
</html>