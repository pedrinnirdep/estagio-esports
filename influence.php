<?php
session_start();
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<link rel ="shocurt icon" type="imagens/png" href="imagens/icon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Royal eSports</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Royal eSports</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="lol.php">Lol</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="r6.php">R6</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="cs.php">Cs:Go</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="influenciadores.php">Influenciadores Digitais</a>
          </li>
		  <li class="nav-item">
                              <?php
      if ( isset($_SESSION['usuario']) ){
      echo "<a class='nav-link' href='logout.php'>Logout</a>";
    
      }else{
        echo "<a class='nav-link' href='login.php'>Login</a>";
      }
      ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Influenciadores no cenário	 do eSports!</h1>
      <p class="lead">Aqui você encontra os principais influenciadores brasileiros de Lol, Cs:Go e Rainbow Six Siege no mundo do eSports.</p>
      
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="imagens/fallen.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Fallen</h4>
            <p class="card-text">Gabriel Toledo de Alcântara Sguário, (30 de maio de 1991), mais conhecido como FalleN, é um jogador profissional de Counter-Strike: Global Offensive (CS:GO) que joga atualmente pela MIBR.</p>
          </div>
          <div class="card-footer">
            
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="imagens/jukes.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Jukes</h4>
            <p class="card-text">Jukes é apenas mais um jogador de league of legends, começou a jogar no final da Season 3, Challenger season 4, 5 e 6. Os estilos de músicas preferidos dele são: Rap e Eletrônica, faz live a cerca de 2 anos. Ele tem 19 anos de idade e mora no Rio de janeiro-Saquarema.</p>
          </div>
          <div class="card-footer">
            
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="imagens/zig.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Zigueira</h4>
            <p class="card-text">Leo "zigueira" Duarte nasceu em 20 de setembro de 1988 em Petrópolis, no Rio de Janeiro. Começou a jogar games de tiro em primeira pessoa - mais especificamente Counter-Strike 1.5 - em 2002 nas lan houses da cidade, guardando o dinheiro que ganhava para lanchar na escola, até ganhar um computador da sua mãe.</p>
          </div>
          <div class="card-footer">
           
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="imagens/brtt.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">BrTT</h4>
            <p class="card-text">Felipe Gonçalves da Rocha, (Rio de Janeiro, 19 de fevereiro de 1991), conhecido publicamente como brTT, é um jogador profissional de League of Legends e empresário brasileiro. Atua na posição de atirador pelo Flamengo eSports, que disputa o CBLoL, maior campeonato do jogo no Brasil.

</p>
          </div>
          <div class="card-footer">
            
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>



      <!-- Sidebar Widgets Column -->
      
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Royal eSports 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
