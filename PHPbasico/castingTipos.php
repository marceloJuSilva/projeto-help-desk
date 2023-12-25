<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    //int > float/string
    $valorInteiro = 10;
    echo gettype($valorInteiro);
    echo '<br>';
    $valorFlutuante = (float) $valorInteiro;
    echo gettype($valorFlutuante);
    echo '<br>';
    $valorLetras = (string) $valorInteiro;
    echo gettype($valorLetras);

    //float > int/string
    $valorFlutuante2 = 10.35;
    echo gettype($valorFlutuante2);
    echo '<br>';
    $valorInteiro2 = (int)  $valorFlutuante2; //posso usar também integer
    echo gettype($valorInteiro2);
    echo '<br>';
    echo $valorInteiro2;
    echo '<br>';

    //string > int/float/boolean
    $valorLetras2 = "22.12";
    $valor = (int) $valorLetras2;
    echo gettype($valor);
    echo '<br>';
    echo $valor;
    echo '<br>';

    $valorBooleano = (boolean) $valorLetras2;
    echo gettype($valorBooleano);
    echo '<br>';
    echo $valorBooleano; //Será impresso valor 1 representando verdadeiro, qualquer valor diferente de 0 ou vazio é um valor verdadeiro.
    echo '<br>';

    //boolean >int/string

    $valorBooleano2 = false;
    echo $valorBooleano2;
    echo '<br>';
    $valor3 = (int) $valorBooleano2;
    echo $valor3;

    


    



?>
    
</body>
</html>