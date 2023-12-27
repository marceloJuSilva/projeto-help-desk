<?php require_once "validador_acesso.php";

$chamados = array();
$arquivo = fopen('arquivo.hd','r');
//enquanto houver registros (linhas) a ser recuperados
while(!feof($arquivo)) {
$registro = fgets($arquivo); //recupera os dados da linha
$chamados[] = $registro; }
fclose($arquivo);

$chamado_exibir = array();

foreach($chamados as $chamado) {
  $chamado_dado = explode('#',$chamado);
  if($_SESSION['perfil_id'] == 2) {
    if($_SESSION['id'] != $chamado_dado[0]){
      continue;
    }
  
  }

  if(count($chamado_dado) <4){
  continue;
  }

  $chamado_exibir[] = $chamado_dado;
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
            
            

              <?php foreach($chamado_exibir as $chamado) {?>   
              
                        
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado[1];?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado[2];?></h6>
                  <p class="card-text"><?= $chamado[3];?></p>

                </div>
              </div>


            <?php }?>
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