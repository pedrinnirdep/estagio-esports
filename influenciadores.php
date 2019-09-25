
<?php
session_start();
$_SESSION['tema_id']=4;
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
            <h1 class="mt-4">Influenciadores Digitais</h1>

            <!-- Author -->
            <p class="lead">
                por
                <a href="">Pedro Vitor</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Postado em Março 24, 2019 ás 10:00</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="imagens/faker.jpg" alt="">

            <form>
                <h5 class='card-header'>Número de Likes: <?php

                    $conn =  mysqli_connect("127.0.0.1","root","", "blog");

                    //$sql = $con->prepare("SELECT COUNT(*) FROM curtida WHERE tema_id=4");

                    //$row = $sql->fetchAll(PDO::FETCH_CLASS);

                    //echo $row['count'];

                    $abc="SELECT count(*) as c FROM curtida WHERE tema_id=4";
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



            <p class="lead">Captain Jack(KR) stremer e influenciador, Faker(KR) Pro player e jogador da SK Telecon T1(SKT), BrTT influenciador e Pro Player Flmanego eSports, Yoda influenciador e stremer BR.</p>

            <p>A cada ano que se passa os influenciadores ganham mais espaço no mundo do eSports, em diversos games. Atualmente eles mudam o cenário de forma efetiva e a comunidade apoiam seus trabalhos, a maioria deles são stremes, mas temos muitos pro players como influenciadores, no cenário atual eles também são de extrema importância.</p>

            <p>No final do ano a Riot Games, fundadora do Lol(League Of Legends), cria um dos maiores eventes do mundo digital conhecido como o All-Stars, onde se reúnem os maiores influenciadores e pro players do jogo. Eles arrecadam dinheiro para caridades além de ser um grande espetáculo para o público do mundo inteiro.</p>
            <center><div class = "col-lg-8">
                    <img class="img-fluid rounded" src="imagens/gaule.jpg" width="480" height="272" />

                </div></center>

            <blockquote class="blockquote">
                <center><p class="mb-0">Gaules stremer e influenciador no Cs:Go</p></center>

            </blockquote>


            <p>Gaules um dos maiores influenciadores de Cs:Go no Brasil, atualmente stremer da twitch TV, ele esta sempre por dentro do cenário competitivo de Cs:Go, apoiando um dos mais lendários times que o Cs já pode ter atualmente a Mibr, antiga SK Gaming.</p>

            <p>Gaules já recebeu diversos prêmios no ramo do eSports, atualmente seu canal na twitch tem cerca de 80.000 mil telespectadores em dias de jogos da Mibr, ele acompanha o time em todos os campeonatos e faz cobertura completa de tudo que rola dentro do cenário competitivo.</p>


				<h3 class="mb-0">Crescimento do Esports</h3>
				
				
				
				 <p class="card-text">Hoje em dia, os esportar eletronicos, ou e-sports estão em crescimento no Brasil e no mundo, no Brasil os mais famosos são o League of Legends (LOL) , Counter-Strike: Global Offensive (CS-GO) e o Tom Clancy's Rainbow Six Siege (R6) onde o cenário movimenta milhões de reais por ano, com várias competições.O Brasil é considerado o 3º maior público nas audiências de torneios de eSports no mundo (ficando atras apenas da China e dos Estados Unidos).</p>
					<p class="card-text">No Brasil o invesimento nessa área está tão alto, que já possui ate times de futebol invesimento, como o Remo F.C. e o Flamengo (no lol), inclusive o time do Flamengo é o favorito para ganhar o 1 split (temporada) no cblol (Campeonato Brasileiro de League of Legends) No CSGO, temos como o time mais famoso a MIBR (que está passando por um momento díficil e perdeu todas as partidas do último campeonato que pareticipou), e no R6 a Team Liquid e a Faze, como os times brasileiros mais famosos. </p>
			
			 <p class="card-text">Muitas mídias profissionais, como a ESPNe SporTV são responsáveis por divulgar os torneios e novidades dos times, bem como informar os amantes dos jogos sobre os tradicionais eventos de disputa que ocorrerão. No entanto, ainda é difícil ver emissoras televisivas dando atenção ao eSports. Por isso a twitch.tv, plataforma online de transmissão ao vivo online com canais streamers, onde é possível acompanhar alguns jogos, se destaca entre todas.
Muito está sendo prometido para que esse mercado infle cada vez mais e, mesmo que com pouco investimento na modalidade, o Brasil já aparece como um dos maiores consumidores de jogos eletrônicos, entrando na quarta posição do ranking mundial.</p>


            <?php
                if ( isset($_SESSION['usuario']) ){
                    echo "<hr>
        <div class='card my-4'>
          <h5 class='card-header'>Comentar:</h5>
          <div class='card-body'>
            <form action='comentI' method='post'>
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

$sql = $con ->prepare("SELECT * FROM post where tema_id=4");

$sql->execute();

$rows = $sql->fetchAll(PDO::FETCH_CLASS);

        // fetchAll - recupera todos os registros
        // PDO:: FETCH_CLASS - guardar no formato de objeto



echo "<table class= 'table table-striped table-hover'>";

foreach($rows as $row){

    echo"<tr><td>$row->usuario_id</td><td>$row->data</td><td>$row->mensagem</td></tr>";

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


