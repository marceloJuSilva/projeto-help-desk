<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
      
      /*
      $data = date('d/m/y H:i'); //O formato é definido nos argumentos, podemos pesquisar varios toquens disponiveis dentro do site do php
      echo $data;
      echo '<br>';

      echo date_default_timezone_get(); //Recupera Fuso horário padrão dentro do sistema operacional dentro do xampp
      echo '<br>';

      date_default_timezone_set('America/Sao_Paulo'); //Alterando o fuso horário em tempo de execução
      echo date_default_timezone_get();
      echo '<br>';
      $data2 = date('d/m/y H:i');
      echo '<br>';
      echo $data2; */
    //**********************************************************************************************************//
      
     //Calculo usando datas
      //Primeiro para calcular precisamos utilizar o padrão americano de datas ano-mes-dia
      $dataInicial = '2018-04-24';
      $dataFinal = '2018-05-15';

      //Primeira coisa é converter a data que é textual em segundos
      $dataInicial = strtotime($dataInicial);
      echo $dataInicial;
      echo '<br>';
      $dataFinal = strtotime($dataFinal);
      echo $dataFinal;

      $diferencaDatas = $dataFinal - $dataInicial; //Caso o resultado seja um valor negativo, podemos usar a função abs que retorna um valor absoluto.
      echo '<br>';
      echo $diferencaDatas;
      $diferencaDias = $diferencaDatas / 86400;
      echo '<br>';
      echo $diferencaDias;

      //A depender da linguagem e da função o timesTampo pode varias, no JS ele ele trabalha com milissigundos, já no PHP usando a função "strtotime" ele trabalha com segundos.




   
      


    
    
    
    ?>




</body>
</html>