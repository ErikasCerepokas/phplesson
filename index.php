<?php 
$bool = true;
$int = 1 ;
$flt = 1.23;
$str = "1.23";

if ($bool == $int){
    $type = 'Lygūs';
} else {
    $type = 'Identiški';
    }
if ($str == $bool) {
    $type_1 = 'Lygūs';
} else {
    $type_1 = 'Identiški';
}
if ($flt == $str){
    $type_2 = 'Lygūs';
} else {
    $type_2 = 'Nelygūs';
}


$li_1 = "Bool (true) ir Integer (1):$type";
$li_2 = "String (1) ir Boolean (1):$type_1";
$li_3 = "Float (1.23) ir String (1.23):$type_2"
?>
<html>
    <head>
        <title>Uzduotis#7</title>
    </head>
    <body>
        <main>
            <ul>
                <li><?php print $li_1; ?></li>
                <li><?php print $li_2; ?></li>
                <li><?php print $li_3; ?></li>
            </ul>
        </main>
    </body>
</html>