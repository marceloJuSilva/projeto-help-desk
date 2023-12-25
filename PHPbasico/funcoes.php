<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    //Funções nos permite estabelecer pequenos subprogramas, que podem ser chamados sempre que necessário.
    //Funções podem ser to tipo void ou do tipo retorno "Retorna algo para quem chamou a função".
    
    $nome = 'Marcelo';
    echo $nome;

    function alterarNome () {
        //No php para acessar uma variável global dentro do escopo da função eu preciso primeiro declarar que a variável em questão é global.
       global $nome;
       echo '<br>';
       $nome = 'Helren';

    }
    
    alterarNome();
    echo $nome;



    




?>
    
</body>
</html>