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
        // header('Refresh:1');
        $a = 1;
        $b = 2;    
        $c = $a + $b;
        echo '$a = 1';
        echo "<br>";
        echo '$b = 2';
        echo "<br>";
        echo '$c = $a + $b';
        echo "<br>";
        $c = $c + 5;
        echo '$c = $c + 5 ou $c += 5';
        echo "<br>";
        echo '$b = $b + $a ou $b += $a';
        echo "<br>";
        echo '$a = $a + 1 ou $a += 1 ou $a++';


   ?>
</body>
</html>