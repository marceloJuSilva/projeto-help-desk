<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        //Transformar todos os caracteres da string em ** minúsculas **
        $palavraMinuscula = "Palavra Minuscula";
        echo strtolower($palavraMinuscula);

        echo '<br>';

        //Transforma todos os caracteres em **MAIÚSCULAS**
        $palavraMaiuscula = "Palavra Maiuscula";
        echo strtoupper($palavraMaiuscula);

        echo '<br>';

        //Transforma o primeiro caracter da string em maiúsculo;
        $primeiraMaiscula = "primeira letra";
        echo ucfirst($primeiraMaiscula);

        echo '<br>';

        //Conta a quantidade de caracter em uma string
        $tamanho = 'texto';
        echo strlen($tamanho);

        echo '<br>';

        //Substitui uma cadeia de caracteres por outra dentro de uma string
        $substituir = "Vamos Marcelo";
        echo str_replace("Marcelo", "Helren", $substituir);

        echo '<br>';

        //Retorna parte de uma string
        $retornar = "O Marcelo é muito legal";
        echo substr($retornar, 2, 7);




        

    
    
    
    ?>




</body>
</html>