
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //foreach - Comando especializado para array e objetos

        $funcionarios = array(
            ['nome' => 'João', 'salario' => 2500],
            ['nome' => 'Maria', 'salario' => 3200],
            
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $indice => $funcionario) {

            foreach($funcionario as $indice2 => $nome) {
                echo $indice2 . ' : ';
                echo $nome;
                echo '<br>';

            }

            echo '<hr>';

            

        }


        
    
    ?>


</body>
</html>