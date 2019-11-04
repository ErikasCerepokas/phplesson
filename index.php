<?php

$sunny = rand(0, 1);
        
if ($sunny) {
   $oras = 'Saulėta';
   $img = 'bg-sunny';
} else {
    $oras = 'Debesuota';
    $img = 'bg-cloudy';
}
?>
<html>
    <head>
        <title>orai</title>
        <style>
            .bg-sunny{
                background-image:url("https://previews.123rf.com/images/urfandadashov/urfandadashov1809/urfandadashov180902608/109317496-sun-vector-icon-isolated-on-transparent-background-sun-logo-concept.jpg");
                width: 100px;
                height: 100px;
                background-size: cover
            }
            .bg-cloudy{
                background-image:url("https://media.istockphoto.com/vectors/cloudy-icon-vector-sign-and-symbol-isolated-on-white-background-logo-vector-id1001139946");
                width: 100px;
                height: 100px;
                background-size: cover
            }
            .flex{
                Display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <main class="flex">
            <div class="<?php print $img; ?>"></div>
            <div>
                <p><?php print $oras; ?></p>
            </div>
        </main>
    </body>
</html>