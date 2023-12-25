<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    
    $lista_frutas = array( 
            ['titulo' => 'titulo 1', 'noticia' => 'noticia 1'],
            ['titulo' => 'titulo 2', 'noticia' => 'noticia 2'],
            ['titulo' => 'titulo 3', 'noticia' => 'noticia 3'],
            ['titulo' => 'titulo 4', 'noticia' => 'noticia 4']
         );

     
      


        
    $indice = 0;
    //WHILE
    while($indice <count($lista_frutas)) {
        echo '<h3>' . ($lista_frutas[$indice]['titulo'] . '</h3>');
        echo '<p>' . ($lista_frutas[$indice]['noticia'] . '</p>');
        echo '<br>';
        $indice++;
    }
    echo '<hr>';

    //DO WHILE
/*
    $indice2 = 0;

    do{
        echo $lista_frutas[$indice2];
        echo '<br>';
        $indice2++;

    } while($indice2 < 3);

    echo '<hr>';

    //for

    for($indice3 = 10; $indice3 > 0; $indice3--) {
        echo $indice3;
        echo '<br>'; 
    }
    */












?>

    
</body>
</html>