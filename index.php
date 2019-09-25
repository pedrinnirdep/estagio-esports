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

<style>



</style>


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
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
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

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Artigos
          <small></small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="imagens/blast.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Mibr amarga último lugar na BLAST Pro Series SP</h2>
            <p class="card-text">A MIBR perdeu para a Ninjas In Pyjamas (NiP) e terminou em último lugar na BLAST Pro Series São Paulo 2019, torneio de Counter Strike: Global Offensive (CS:GO). A última rodada de jogos do campeonato também marcou a classificação da Astralis e Team Liquid para a final, que acontece neste sábado (23), às 18h. A decisão será uma série melhor de três (MD3).</p>
			
            
			
			<a  href="cs.php" class="btn btn-primary">Leia Mais</a>

        <!-- Single Comment -->
        

        <!-- Comment with nested comments -->
       
          </div>
          <div class="card-footer text-muted">
            Postado em 25 de março de 2019
            
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="imagens/cblol.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">League Of Legends(Lol)</h2>
            <p class="card-text">League of Legends (abreviado como LoL) é um jogo eletrônico do gênero multiplayer online 
battle arena(MOBA), desenvolvido e publicado pela Riot Games para Microsoft Windows[3] e Mac OS X.

</p>
             <a  href="lol.php" class="btn btn-primary">Leia Mais</a>
          </div>
          <div class="card-footer text-muted">
            Postado em 22 de março de 2019
            
          </div>
		  
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="imagens/compr.png" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Rainbow Six: Siege: entenda o cenário competitivo do jogo da Ubisoft</h2>
            <p class="card-text">Rainbow Six: Siege é um dos jogos que mais cresce nos esports. O FPS da Ubisoft tem um calendário de campeonatos estruturado ao redor das temporadas do jogo e grandes organizações já têm line up no R6. Além disso, o título recebe atualizações frequentes com novos operadores e mapas. Veja, a seguir, como funciona o cenário competitivo de Rainbow Six, desde as ligas nacionais até as internacionais.</p>
			
            <a  href="r6.php" class="btn btn-primary">Leia Mais</a>
          </div>
          <div class="card-footer text-muted">
            Postado em 25 de março de 2019
            
          </div>
        </div>
		
		
		<div class="card mb-4">
          <img class="card-img-top" src="imagens/estadio.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Crescimento do Esports</h2>
            <p class="card-text">Hoje em dia, os esportar eletronicos, ou e-sports estão em crescimento no Brasil e no mundo, no Brasil os mais famosos são o League of Legends (LOL) , Counter-Strike: Global Offensive (CS-GO) e o Tom Clancy's Rainbow Six Siege (R6) onde o cenário movimenta milhões de reais por ano, com várias competições.O Brasil é considerado o 3º maior público nas audiências de torneios de eSports no mundo (ficando atras apenas da China e dos Estados Unidos).</p>
			 <h2 class="card-title">Influenciadores Digitais</h2>
			 <p class="card-text">
			 A cada ano que se passa os influenciadores ganham mais espaço no mundo do eSports, em diversos games. Atualmente eles mudam o cenário de forma efetiva e a comunidade apoiam seus trabalhos, a maioria deles são stremes, mas temos muitos pro players como influenciadores, no cenário atual eles também são de extrema importância.
			 </p>
            <a  href="influenciadores.php" class="btn btn-primary">Leia Mais</a>
			
          </div>
		  
          <div class="card-footer text-muted">
            Postado em 26 de março de 2019
          </div>
        </div>

        <!-- Pagination -->
       

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
       

        <!-- Categories Widget -->
       <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                 
                  <li>
                    <a href="times.php">Times CbLol</a>
                  </li>
                  
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="influence.php">Influenciadores</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">CbLol</h5>
		  <div class = container>
		  <div class = "col-md-4"><br>
		  <img src="imagens/cnb.jpg"  width=300 height=180>
		  </div>
		  </div>
          <div class="card-body">
            CNB crava vaga nas semi-finais.
          </div>
        </div>
		<div class="card my-4">
          <h5 class="card-header">Cs:Go</h5>
		  <div class = container>
		  <div class = "col-md-4"><br>
		  <img src="imagens/mibr.jpg"  width=300 height=180>
		  </div>
		  </div>
          <div class="card-body">
           Mibr viaja, e já se prepara para o próximo campeonato.
          </div>
        </div>
		
		<div class="card my-4">
          <h5 class="card-header">Rainbow Six Siege</h5>
		  <div class = container>
		  <div class = "col-md-4"><br>
		  <img src="imagens/liquid.jpg"  width=300 height=180>
		  </div>
		  </div>
          <div class="card-body">
            Liquid ainda pode nós surpreender?
          </div>
        </div>
		
      </div>

    </div>
    <!-- /.row -->

  </div>
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
