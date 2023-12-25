<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
    //***************_VERIFICAR SE UM PARAMETRO É UM ARRAY _*************************//
    $lista_nomes = array('marcelo' =>'Desenvolvedor','helren' =>'enferemeira'); 

    $e_array = is_array($lista_nomes);
    if($e_array) {
        echo 'Sim, o valor pesquisado é um array.';
    } else {
        echo 'Não, o valor pesquisado não é um array.';
    }
    echo '<hr>';

    //****************Retorna todas as chaves de um array **************************************
    //Cria um novo  array de valore que recebe todas as chaves do meu array
    print_r(array_keys($lista_nomes));
    echo '<hr>';

   //**********Ordena os valores de um array e reajusta seus índices, se for índice associativo recria usando sequencial 
   //reajusta o proprio array que for passado por parametro

   sort($lista_nomes); //Retorna true ou false
   echo '<pre>';
        print_r($lista_nomes);
   echo '</pre>';

   echo '<hr>';

   //******************ordena os valores de um array preservando os indices ******************************
    $lista_frutas = array('doce'=>'banana', 'azeda' =>'limão','amargo'=>'caju');
    $validacao = asort($lista_frutas); //Retorna true ou false
    echo '<pre>';
            print_r($lista_frutas);
    echo '</pre>';
   
    if($validacao) {
        echo 'array foi reordenado';
    }

    echo '<hr>';

    //*********************Conta o numero de elementos no array****************************************
   
    echo count($lista_frutas);

    echo '<hr>';
  

    //*******************Conectar elementos de mais de um array em um array unico ************************
    $array1 = ['olx', 'windows'];
    $array2 = array('linux');
    $array3 = ['solaris'];

    $novo_array = array_merge($array1,$array2,$array3);
    echo '<pre>';
            print_r($novo_array);
    echo '</pre>';

    echo '<hr>';

    //***********************Retorna um array da divisão de uma string baseada em um delimitador
    $string = '26/04/2018';
    $array_retorno = explode('/', $string); //retorna um array
    echo '<pre>';
        print_r($array_retorno);
        echo 'padrão americano de datas: ' . $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
    echo '</pre>';
    
    echo '<hr>';

    //***********************************Junta elementos de um array em uma string
    $array = ['a','b','x','y'];
    echo $string = implode(',', $array);










   






        






?>
    
</body>
</html>