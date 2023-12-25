<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $aluno = 'Marcelo';
    $media = 7;
    $nota = 8;

   $validaAprovacao = $nota >= $media ? 'aluno aprovado' : 'aluno reprovado';
   echo $validaAprovacao;


?>
    
</body>
</html>