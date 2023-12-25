<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

    $lista_frutas = array('Banana','Maçã','Morango','Uva');

    //************************* in_array() ******************************

    $existe = in_array('Abacate',$lista_frutas);
    //true - 1/true
    //false - vazio/false

        if($existe) {
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }

    echo '<hr>';

    //array_search() - Caso o valor pesquisado exista, retorna o valor do indice, 
    // se não exisitir retorna **null**, e semelhante ao false, retonar vazio no navegador
        $existe2 = array_search('Abacate',$lista_frutas) ;
        if($existe2 != null) {
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }
    
    echo '<hr>';

        //****************Array Multidimensional**************** */
        $lista_coisas = array(
            'frutas' => $lista_frutas,
            'pessoas' => array('João','Maria')
        );

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        $existe = array_search('Morango',$lista_coisas['frutas']);
        //true - 1/true
        //false - vazio/false

        if($existe != null) {
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }

        echo '<br>';




        






?>
    
</body>
</html>