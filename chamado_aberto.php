<?php 
echo 'Número da requisição: ' . $_GET['chamado'];

?>

<?php require_once "validador_acesso.php"?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Número da requisição: <?php echo $_GET['chamado']; ?>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                      <div class="row mt-5">
                      <div class="col-6">
                      <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                      </div>

                      <div class="col-6">
                        <a href="abrir_chamado.php" class="btn btn-lg btn-info btn-block" type="submit">Abrir outro chamado</a>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>