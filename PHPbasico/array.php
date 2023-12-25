<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $lista = array(
            'funcionarios' => array(
            '0' => array(
                'nome' => 'Marcelo',
                'idade' => 31,
                
            ) 
            ));


        $lista2 = [
            'Marcelo',
            'Helren',
            'Pedro'
        ];

        




        echo '<pre>';
        print_r($lista);
        echo '</pre>';

        echo '<pre>';
        print_r($lista2);
        echo '</pre>';


    
    ?>



</body>
</html>