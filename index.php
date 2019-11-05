<?php
$months = 12;
$wallet = 1000;
$month_income = 700;


for($x = 1; $x < $months; $x++ ){
    $month_expenses = rand(800, 1300);
    $wallet += $month_income - $month_expenses;
    if($wallet < 0){
        break;
    }
}

$h1 = 'Pinigines skaiciuokle';
$h2 = "Atsargiai, $x menesi gali baigtis pinigai!" ;
?>
<html>
    <head>
        <title>Uzduotis3</title> 
    </head>
    <body>
        <main>
            <h1><?php print $h1 ?></h1>
            <h2><?php print $h2 ?></h2>
        </main>
    </body>
</html>