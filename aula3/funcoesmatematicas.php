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
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        $v3 = $_GET["a"];
        $v4 = $_GET["b"];

        echo "O valor absoluto de $v1 é ". abs($v1);
        echo "<br>";
        echo "$v2 <sup>2</sup> = ". pow($v2,2);
        echo "<br>";
        echo "√$v3 = ". sqrt($v3);
        echo "<br>";
        echo "Arredondando $v4 - Fica ". round($v4);
        echo "<br>";
        echo "A parte inteira de $v4 é ". intval($v4);
        echo "<br>";
        echo "O valor de $v3 em moeda é R$". number_format($v3, 2,",",".");
        echo "<br>";



    ?>
</body>
</html>