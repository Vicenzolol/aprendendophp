<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <title>Page Title</title>
    <!-- <meta name='viewport' content='width=device-width, initial-scale=1'> -->
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <!-- <script src='main.js'></script> -->
</head>
<body>
    <?php

        echo 'http://localhost/scripts/Iniciando/aula3/passarvalorporurl.php?a=3&b=2';
        echo "<br>";
        echo '$n1 = $_GET["a"]';
        echo "<br>";
        echo '$n2 = $_GET["b"]';
        echo "<br>";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        echo "A soma de $n1 e $n2 é ".($n1+$n2);

    ?>
</body>
</html>