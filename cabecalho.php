<?php
    include 'conexao.php';

    $sql1 = "Select imagem_logo from imagens";
    $query = $mysqli->query($sql1);
    $dados = $query->fetch_array();
      $imagem_logo = $dados['imagem_logo'];

    
    ?> 
<br>
<<<<<<< HEAD
<div class="col-md-12" align="center"  width="430">
    <img  src="img/FAJU123.png" width="350" margin="0 auto;" max-width="100%;" height="auto"> 
=======
<div align="center"  width="430">
    <img  src="upload/imagem/<?= $imagem_logo; ?>" width="400" margin="0 auto;" > 
>>>>>>> fe428aa86218b22874b7c30676014254dd4f2011
</div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="index.php?url=inicial"> Início</a>
            </li>
            <li class="nav-item px-lg-4">
               <a  class="nav-link text-uppercase text-expanded" href="index.php?url=galeria">Galeria</a>
            </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="index.php?url=roteiros">Roteiros</a>
            </li>
            
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="index.php?url=contato">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

