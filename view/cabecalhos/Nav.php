  <!-- bg-dark1= classe alterada diretamente no bootstrap -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark1">
 <a class="navbar-brand" href=""><img src="../../imagens/logo.png" style="width:57; height:57px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Tela inicial <span class="sr-only">(página atual)</span></a>
      </li>

      <!-- arrumar os caminhos, e dps destruir as sesssoes ao sair de cada pagina -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Cores</a>
          <div class="dropdown-divider"></div> <!-- cria uma linha nas divisoes -->
          <a class="dropdown-item" href="#">Montadoras</a>
          <div class="dropdown-divider"></div> <!-- cria uma linha nas divisoes -->
          <a class="dropdown-item" href="#">Seguradoras</a>
          <div class="dropdown-divider"></div> <!-- cria uma linha nas divisoes -->
          <a class="dropdown-item" href="#">Tipo de Atendimentos</a>
          <div class="dropdown-divider"></div> <!-- cria uma linha nas divisoes -->
          <a class="dropdown-item" href="#">Usuários</a>
        </div>

      </li>
      <!-- cria um menu -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
          Veículos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Cadastro Geral</a>
          <div class="dropdown-divider"></div> <!-- cria uma linha nas divisoes -->
          <a class="dropdown-item" href="#">Laudos</a>
          <div class="dropdown-divider"></div> <!-- cria uma linha nas divisoes -->
          <a class="dropdown-item" href="#">Entrada informal</a>
          <div class="dropdown-divider"></div> <!-- cria uma linha nas divisoes -->
          <a class="dropdown-item" href="#">Vistorias</a>
        </div>
      </li>
       <!-- cria um menu -->
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
          Serviços
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Orçamentos</a>
          <div class="dropdown-divider"></div> <!-- cria uma linha nas divisoes -->
          <a class="dropdown-item" href="#">Ordem de Serviço</a>
         
        </div>
      </li>

      <!-- desativa um texto -->
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Relatorios</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sobre</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-dark my-2 my-sm-0" type="Button">Sair</button>
      <!-- botao sair -->
    </form>
  </div>
</nav>

   
    <script src="../../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
