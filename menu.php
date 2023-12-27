<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    App Help Desk
  </a>

  <form class="form-inline" action="pesquisa-chamado.php" method="post">
    <div class="input-group">
      <label for="pesquisa" class="sr-only">Pesquisar Chamado</label>
      <input type="text" id="pesquisa" name="pesquisa" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '')" title="Por favor, insira apenas números." placeholder="Pesquisar (apenas números)" required>
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
      </div>
    </div>
  </form>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="logoff.php">SAIR</a>  
    </li>
  </ul>
</nav>

