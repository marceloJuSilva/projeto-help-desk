<?php 

    session_start();

    $arquivo = fopen('arquivo.hd','r');

    while(!feof($arquivo)) {
    $registro = fgets($arquivo); //recupera os dados da linha
    $chamados[] = $registro;  

}

foreach($chamados as $chamado) {
$dado_chamado = explode('#',$chamado);

$numero_chamado = count($chamados) + 1;

if($dado_chamado[4] == $numero_chamado){
   $numero_chamado = count($chamados) + 1;
 
}

}


    fclose($arquivo);

    $numero_chamado = count($chamados) + 1;  
 

    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . '#'. $numero_chamado . PHP_EOL;

    $arquivo = fopen("arquivo.hd","a");

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>