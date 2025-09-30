<html>
    <head>
<title> Aula 05 - PHP </title>
    </head>
    <body>
        <?php
           $numero1= 2;
           $numero2= $_GET["x"];

        echo "Os valores são $numero1 e $numero2." ;
        echo "<br> O valor absoluto de $numero1 é: " .abs($numero1) ;
        echo "<br>  O número $numero2 <sup> $numero1 </sup> é igual a: " .pow($numero2, $numero1);
        echo "<br>  A raiz quadrada de $numero2 é: " .sqrt($numero2);

        echo "<br> <br> ";
        echo "<br>  Se o número for até 0,5 arredonda pra baixo, se for maior que 0,6 arredonda pra cima: " .round($numero2);
        echo "<br>  O número arredondado para cima é:  " .ceil($numero2);
        echo "<br>  O número arredondado para baixo é: " .floor($numero2);

        echo " <br> <br> <br> ";
        echo " A parte inteira de $numero2 é igual a: " .intval($numero2);

        echo "<br> <br> <br>";
        echo " Um pirulito custa: R$" .number_format($numero1, 2, "," , ".");
        ?>

    </body>
</html>
