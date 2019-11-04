<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
$h3_result = 'Nemiegosi';

if ($grizai_velai && !$grizai_isgeres) {
    $h2_result = 'Grįžai vėlai';
    $h3_result = 'Miegosi';
} else if ($grizai_velai && $grizai_isgeres) {
    $h2_result = 'Grįžai vėlai ir išgėręs';
} else if (!$grizai_velai && $grizai_isgeres) {
    $h2_result = 'Grįžai išgėręs';
} else { 
    $h2_result = 'Nieko nepadarei';
}

$h1 = 'Buitine skaiciuokle';
$h2 = "Situacija: $h2_result";
$h3 = "Isvada: $h3_result ant sofos"
?>
<html>
    <head>
        <title>Buitine skaiciuokle</title>
    </head>
    <body>  
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>