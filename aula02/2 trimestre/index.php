<html>
    <head>
<title> Aula 04 - PHP </title>
    </head>
    <body>
        <?php
            $n1=$_GET["a"];
            $n2=$_GET["b"];

            echo " <br> A soma dos números $n1 e $n2 é igual a: " .($n1+$n2) ; 

            echo " <br> A subtração dos números $n1 e $n2 é igual a: " .($n1-$n2);

            echo " <br> A multiplicação dos números $n1 e $n2 é igual a: " .($n1 * $n2);

            echo " <br> A divisão dos números $n1 e $n2 é igual a: " .($n1 / $n2);

            echo " <br> O resto da divisão dos números é igual a: " .($n1 % $n2);
        
        ?>

    </body>
</html>
