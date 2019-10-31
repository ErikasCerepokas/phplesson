<?php
$string = 'Erikas';
$int = -10;
$bool = true;
$null = null;
#
$li_1 = "String tipas: $string";
$li_2 = "Integer tipas: $int";
$li_3 = "Boolean tipas: $bool";
$li_4 = "Null tipas: $null";
?>
<html>
    <head>
        <title>Variables</title>
    </head>
    <body>
        <table>
            <ul>
                <li><?php print $li_1; ?></li>
                <li><?php print $li_2; ?></li>
                <li><?php print $li_3; ?></li>
                <li>N<?php print $li_4; ?></li>
            </ul>
        </table>
    </body>
</html>
