<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
      
      //Arredonda o valor para cima
      $numero = 44.54;
      echo ceil($numero);

      echo '<br>';

      //Arredonda para baixo 
      echo floor($numero);

      echo '<br>';

      //Arredonda o valor com base das casas decimais
      echo round($numero);

      echo '<br>';

      //Gera um numero inteiro aleatorio 0 ao maior valor possivel com base no sistema operacional/ Posso colocar uma parametro de busca.
      echo getrandmax(); //Retorna o valor maior possivel
      echo '<br>';
      echo rand(1,60);

      echo '<br>';

      //Retorna raiz quadrada
      echo sqrt(49);
        

    
    
    
    ?>




</body>
</html>