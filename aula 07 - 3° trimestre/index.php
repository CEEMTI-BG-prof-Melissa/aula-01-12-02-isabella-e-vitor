<html>
    <head>
       <title> Aula 07 - PHP </title>
    </head>


    <body>
        <?php
/*Titulo aula 07 
Isabella Alves 
21/10/2025 */

echo "Valor inicial: 10 ";
        echo "<br> <br> ";

        // += soma e atribui o valor para a variável 
        $a=10;
        $a+=5;
        echo "Após somar 5: $a";
        echo "<br>";

        //-= subtrai e atribui o valor para a variável
        $a-=2;
        echo "Após subtrair 2: $a";
        echo "<br> ";

        // *= multiplica e atribui o valor para a variável
        $a*=3;
        echo "Após multiplicar por 3: $a";
        echo "<br>";

        // /= divide e atribui o valor para a variável
        $a/=2;
        echo "Após dividir por 2: $a";
        echo "<br> <br>";

        // incremento aumenta uma unidade ao valor da variável
        // pré-incremento é o valor alterado antes de ser utilizado 
        echo "O valor pré-incremento: ".(++$a);
        echo "<br>";

        // pós-incremento é o valor alterado depois de ser utilizado
        echo "O valor pós-incremento: ".($a++);
        echo "<br>";

        // decremento diminui uma unidade ao valor da variável
        echo "o valor pré-decremento: ".(--$a);
        echo "<br>";

        echo "O valor pós-decremento: ".($a--);
        echo "<br> <br> ";

        echo "Valor final: $a";
