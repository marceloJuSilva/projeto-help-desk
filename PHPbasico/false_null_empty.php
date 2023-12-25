<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(is_null($funcionario1)) { //Retorna SIM
            echo 'Sim, a variável é NULL';
        } else {
            echo 'Não, a variável não é NULL';
        }

        echo '<br>';

        if(is_null($funcionario2)) { //Retorna NÃO
            echo 'Sim, a variável é NULL';
        } else {
            echo 'Não, a variável não é NULL';
        }

        echo '<hr>';

         //valores empty
         if(empty($funcionario1)) { //Retorna SIM
            echo 'Sim, a variável está VAZIA';
        } else {
            echo 'Não, a variável não está VAZIA';
        }

        echo '<br>';

        if(empty($funcionario2)) { //Retorna SIM
            echo 'Sim, a variável está VAZIA';
        } else {
            echo 'Não, a variável não está VAZIA';
        }

        echo '<hr>';

         //valores false
         if(is_null($funcionario3)) { //Retorna NÃO
            echo 'Sim, a variável é NULL';
        } else {
            echo 'Não, a variável não é NULL';
        }

        echo '<br>';

        if(empty($funcionario3)) { //Retorna SIM
            echo 'Sim, a variável está VAZIA';
        } else {
            echo 'Não, a variável não está VAZIA';
        }
        //NULO - é considerado VAZIO e FALSO
        //VAZIO - Não é considerado NULO, mas é FALSO
        //FALSE - não é NULO, mas é VAZIO




    ?>



</body>
</html>