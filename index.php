<?php
$cube8x8 = [
    //Kiekvienas massivas ,tai nauja linija 1(rodo ijungta spalva) 0(isjungta). Skaitoma iš kairės į dešinę.
    [
        'zalia' => [1, 1, 1, 1, 1, 1, 1, 1],
        'geltona' => [0, 1, 1, 1, 1, 1, 1, 0],
        'raudona' => false
        'isjungta' =>  false,
    ],
    [
        'zalia' => [1, 0, 0, 0, 0, 0, 0, 1],
        'geltona' => [0, 1, 1, 1, 1, 1, 1, 0],
        'raudona' => false,
        'isjungta' =>  false,
    ],
    [
        'zalia' => [1, 0, 0, 0, 0, 0, 0, 0],
        'geltona' => [0, 1, 0, 0, 0, 0, 1, 0],
        'raudona' => [0, 0, 1, 1, 1, 1, 0, 0],
        'isjungta' =>  false,
    ],
    [
        'zalia' => [1, 0, 0, 0, 0, 0, 0, 1],
        'geltona' => [0, 1, 0, 1, 1, 0, 1, 0],
        'raudona' => [0, 0, 1, 0, 0, 1, 0, 0],
        'isjungta' =>  false,
    ],
    [
        'zalia' => [1, 0, 0, 0, 0, 0, 0, 1],
        'geltona' => [0, 1, 0, 1, 1, 0, 1, 0],
        'raudona' => [0, 0, 1, 0, 0, 1, 0, 0],
        'isjungta' =>  false,
    ],
    [
        'zalia' => [1, 0, 0, 0, 0, 0, 0, 1],
        'geltona' => [0, 1, 0, 0, 0, 0, 1, 0],
        'raudona' => [0, 0, 1, 1, 1, 1, 0, 0],
        'isjungta' =>  false,
    ],
    [
        'zalia' => [1, 0, 0, 0, 0, 0, 0, 1],
        'geltona' => [0, 1, 1, 1, 1, 1, 1, 0],
        'raudona' => false,
        'isjungta' =>  false,
    ],
    [
        'zalia' => [1, 1, 1, 1, 1, 1, 1, 1],
        'geltona' => false,
        'raudona' => false,
        'isjungta' =>  false,
    ],
]
var_dump($cube8x8);
?>
<html>
    <head>
        <title>Arėja</title>
    </head>
    <body>
        <main>
            
        </main> 
    </body>
</html>