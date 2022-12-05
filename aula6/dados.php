<!DOCTYPE html>
<html>
<head>
    <?php
        $txt = isset($_POST["t"]) ? ($_POST["t"]) :"Texto";
        $tam = isset($_POST["tam"]) ? $_POST["tam"]: "12pt";
        $cor = isset($_POST["cor"]) ? $_POST["cor"]: "#00000";
    ?>
    <meta charset='utf-8'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <title>Page Title</title>
    <!-- <meta name='viewport' content='width=device-width, initial-scale=1'> -->
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <!-- <script src='main.js'></script> -->
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
   <?php
        // $valor = $_GET["v"];
        // $valor = $_POST["v"];
        // echo $valor;
        // echo $valor2;
        // echo number_format(sqrt($valor),2);
        // $nome = isset($_POST["n"]) ? $_POST["n"]: "[Não informado]";
        // $ano = isset($_POST["a"])? $_POST["a"] : "0";
        // $sexo = isset($_POST["s"])? $_POST["s"]:"[Não informado]" ;
        // $idade = date("Y") - $ano;
        // echo "$nome do sexo $sexo nasceu em $ano e atualmente tem $idade anos";
        echo "<span class='texto'> $txt </span>"
   ?>
   <a href="form.html">voltar</a>
</body>
</html>