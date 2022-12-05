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
        $n = 4;
        echo "<br> n == 4 // n = $n";
        $no = (string)"gustavo";
        $noint = (int)"gustavo";
        $no10int = (int)"10gustavo";
        $noint10 = (int)"gustavo10";

        echo "<br> string gustavo = $no";
        echo "<br> int gustavo = $noint";
        echo "<br> int 10gustavo = $no10int";
        echo "<br> int gustavo10 = $noint10";

        $n = 4.5;
        echo "<br> n == 4.5 // n = $n";
        
        echo "<br> <br> concatenando";

        $nome = "Ana";
        $idade = 18;

        echo '<br> A funcionária  .$nome. atualmente tem .$idade.  anos.';
        echo "<br> A funcionária " .$nome." atualmente tem ".$idade. " anos.";
        echo '<br> A funcionária $nome atualmente tem $idade anos.';
        echo "<br> A funcionária $nome atualmente tem $idade anos.";
       
        


    ?>
</body>
</html>