<?php require_once "validador_acesso.php";

$_POST;


$chamados = array();
$arquivo = fopen('arquivo.hd','r');
//enquanto houver registros (linhas) a ser recuperados
while(!feof($arquivo)) {
$registro = fgets($arquivo); //recupera os dados da linha
$chamados[] = $registro; }
fclose($arquivo);

$chamado_exibir = array();
$chamado_existe = false;

foreach($chamados as $chamado) {
$chamado_dado = explode('#',$chamado);

    if(count($chamado_dado)<5){
        continue;
    } 

    if($_POST['pesquisa'] == $chamado_dado[4]) {
       $chamado_exibir = $chamado_dado;
       $chamado_existe = true;         
    } 

}

?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <?php include_once "menu.php"?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            <!--Codigo para gerar os chamados-->
            <div class="card-body">
            
            

              <?php if($chamado_existe) {?>   
              
                        
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_exibir[1];?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_exibir[2];?></h6>
                  <p class="card-text"><?= $chamado_exibir[3];?></p>

                </div>
              </div>


            <?php } else {
                ?>
                <div class="card mb-3 bg-light">
                <div class="card-body">
                  
                  <p class="card-text">Chamado não encontrado</p>

                </div>
              </div>
              <?php } ?>


              <div class="row mt-5">
                <div class="col-6">
                <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>