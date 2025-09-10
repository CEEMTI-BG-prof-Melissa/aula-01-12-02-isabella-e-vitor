<html>
    <head>
        <title> Aula 03 PHP </title>
    </head>
    <body>
    <?php
        $nome="Isabella Alves";

        $numero1= 10;
        $numero2= 2;

        $soma= $numero1+$numero2;

        echo "Meu nome é" .$nome; 
        echo " <br> Meu nome é $nome";

        echo " <br> <br> A soma de $numero1 e $numero2 é: $soma";

        echo "<br> <br> A subtração dos números $numero1 e $numero2 é igual a: " .($numero1 - $numero2) ".";

        echo "<br> <br> A multiplicação dos números $numero1 e $numero2 é igual a: " .($numero1 * $numero2)".";

        echo "<br> <br> A divisão dos números $numero1 e $numero2 é igual a: " .($numero1 / $numero2) ".";

        echo "<br> <br> O resto da divisão dos númros $numero1 e $numero2 é igual a: " .($numero1 % $numero2) ".";
        
    ?> 
    </body>
</html>
