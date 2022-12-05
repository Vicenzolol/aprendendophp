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
        $preco = $_GET["p"];
        echo "o preço do produto é R$". number_format($preco, 2,",",".");
        $preco += ($preco * 0.1);
        echo"<br>";
        echo "o preço do produto com aumento de 10% é R$". number_format($preco, 2,",",".");
        echo"<br>";
        $ano = $_GET["a"];
        echo "Estamos no ano de ". $ano--;
        echo"<br>";
        echo "Ano passado foi ". $ano;
         
   ?>
</body>
</html>