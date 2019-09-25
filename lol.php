
<?php
session_start();
$_SESSION['tema_id']=1;
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="lol.php">Lol
			</a>
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
  
  
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">League of Legends</h1>

        <!-- Author -->
        <p class="lead">
          por
          <a href="">Juan Gonçalves</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Postado em Março 24, 2019 ás 10:00</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="imagens/lol.jpg" alt="">

         <form>
            <h5 class='card-header'>Número de Likes: <?php

                $conn =  mysqli_connect("127.0.0.1","root","", "blog");

                //$sql = $con->prepare("SELECT COUNT(*) FROM curtida WHERE tema_id=1");

                //$row = $sql->fetchAll(PDO::FETCH_CLASS);

                //echo $row['count'];

                $abc="SELECT count(*) as c FROM curtida WHERE tema_id=1";
                $result=mysqli_query($conn,$abc);
                if($result)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo $row['c'];
                    }
                }

                ?></h5>
         </form>
      


        <!-- Post Content -->
        <p class="lead"></p>

        <p>League of Legends (abreviado como LoL) é um jogo eletrônico do gênero multiplayer online 
battle arena(MOBA), desenvolvido e publicado pela Riot Games para Microsoft Windows[3] e Mac OS X.</p>

        <p>Em League of Legends, os jogadores assumem o papel de "invocadores", controlando campeões 
com habilidades únicas e que lutam com seu time contra outros invocadores ou campeões 
controlados pelo computador.
<p>

         <h3 class="mt-4">Competitivo Lol(CbLol)</h3>
		<p>No cenário de League of Legends brasileiro, 8 equipes partcipam da 1º divisão, também conhecida como CBLoL (Circuito Brasileiro de League of Legends) onde cada time disputa 20 jogos. 
O último colocado é rebaixado para o Circuio Desafiante e o penúltimo joga uma série MD5(Melhor de 5) para assegurar sua vaga, os 4 primeiros disputam as semifinais. 
A equipecampeã pode se classificar no 1º Split para o MSI (Mid Seasin Invitation) e o campeão do 2º Split para o Worlds (Campeonato Mundial).
		</p>
       <h3 class="mt-4">Mapas no jogo</h3>
	   <p>Summoner's Rift é o mapa mais popular de League of Legends.[13] Nesse tipo de mapa, dois times de cinco jogadores competem para destruir uma estrutura inimiga chamada Nexus, que é guardada por torres e defendida pelos jogadores do time adversário
Twisted Treeline é o palco para as partidas 3 contra 3. Assim como no Summoner's Rift, o objetivo é destruir o Nexus da outra equipe, porém o mapa é dividido em apenas 2 rotas. Na selva, entre as duas rotas, existem dois pontos que concedem bônus a equipe ao serem capturados.
Howling Abyss é um mapa gélido com temática voltada para as histórias de Freljord, conhecido como a ponte onde houve a guerra entre os Glacinatas e os Observadores Gélidos. Visando esta guerra, a aparência da ponte é toda quebrada e pedaços da mesma caem com o decorrer da partida. Ficou no lugar de Proving Grounds como mapa do ARAM e do tutorial.
	   </P>
	   

        <?php
      if ( isset($_SESSION['usuario']) ){
      echo "<hr>
        <div class='card my-4'>
          <h5 class='card-header'>Comentar:</h5>
          <div class='card-body'>
            <form action='comentLoL' method='post'>
              <div class='form-group'>
                <textarea name='msg' class='form-control' rows='3'></textarea>
              </div>
              <button type='submit' class='btn btn-primary'>Publicar</button>
            </form>
      <br>
      <form action='like.php' method='post'>
              <div class='form-group'>
        <button type='submit' class='btn btn-success'>LIKE</button>
            </div>
            </form>
          </div>
        </div>";
      }else{
        
      }
      ?>

          <?php

          $con = new PDO( "mysql:host=localhost; dbname=blog", "root", "");

          $sql = $con ->prepare("
SELECT
	p.id,
    DATE_FORMAT( p.data, '%d/%m/%Y %H:%i') as data,
    p.mensagem,
    u.nome as autor,
    u.foto,
    t.assunto
FROM post p
INNER JOIN usuario u ON u.id=p.usuario_id
LEFT JOIN tema t ON t.id=p.usuario_id where tema_id=1");

          $sql->execute();

          $rows = $sql->fetchAll(PDO::FETCH_CLASS);

          // fetchAll - recupera todos os registros
          // PDO:: FETCH_CLASS - guardar no formato de objeto



          echo "<table class= 'table table-striped table-hover'>";

          foreach($rows as $row){

              echo"<tr><td><img width='50px' height='50px' class='rounded-circle' src='imagens/$row->foto'>$row->autor</td><td>$row->data</td><td>$row->mensagem</td></tr>";

          }


          echo "</table>";

          ?>
        <!-- Single Comment -->
       

        <!-- Comment with nested comments --> 
</div>
  
  </div>
</div>  

  
  
   <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Royal eSports 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  
  
  </body>

</html>
