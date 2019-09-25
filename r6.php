
<?php
session_start();
$_SESSION['tema_id']=2;
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
            <h1 class="mt-4">Tom Clancy: Rainbow Six Siege</h1>

            <!-- Author -->
            <p class="lead">
                por
                <a href="">Fellipe Rodrigues</a>

            <hr>

            <!-- Date/Time -->
            <p>Postado em Março 26, 2019 ás 10:00</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="imagens/r6.jpg" alt="">

            <form>
                <h5 class='card-header'>Número de Likes: <?php

                    $conn =  mysqli_connect("127.0.0.1","root","", "blog");

                    //$sql = $con->prepare("SELECT COUNT(*) FROM curtida WHERE tema_id=1");

                    //$row = $sql->fetchAll(PDO::FETCH_CLASS);

                    //echo $row['count'];

                    $abc="SELECT count(*) as c FROM curtida WHERE tema_id=2";
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

            <p>Rainbow Six é uma série de jogos de tiro em primeira pessoa tático lançada para as plataformas Microsoft Windows, Mac OS, iOS, Nintendo 64, PlayStation, Dreamcast, PlayStation 2, Xbox, GameCube, PlayStation 3, Xbox 360 e os portáteis PlayStation Portable, Game Boy Color e Game Boy Advance.</p>

            <p>Rainbow Six põe o jogador no comando de um grupo de elite contra-terrorista fictício do exército americano, um grupo que se autodenomina RAINBOW. Os jogos da série focam no realismo, estratégia, planejamento e trabalho em equipe. A série é assinada pelo romancista estadunidense Tom Clancy, criador de outras séries de jogos de sucesso como Ghost Recon e Splinter Cell.</p>

            <p>
		
						<h2 class="card-title">Rainbow Six: Siege: entenda o cenário competitivo do jogo da Ubisoft</h2>
						
<p class="card-text">Rainbow Six: Siege é um dos jogos que mais cresce nos esports. O FPS da Ubisoft tem um calendário de campeonatos estruturado ao redor das temporadas do jogo e grandes organizações já têm line up no R6. Além disso, o título recebe atualizações frequentes com novos operadores e mapas. Veja, a seguir, como funciona o cenário competitivo de Rainbow Six, desde as ligas nacionais até as internacionais.</p>
<p class="card-text">Após a Season 7, as temporadas de Rainbow Six: Siege passaram a ser divididas em períodos de seis meses: entre junho e novembro e entre dezembro e maio. Ao longo das temporadas acontecem os dois maiores torneios para os times brasileiros: o Brasileirão de Rainbow Six (conhecido como BR6) e a ESL Pro League LATAM, que garante vaga para as finais da ESL Pro League. Já no meio das temporadas, em agosto e fevereiro, acontecem os maiores eventos mundiais de Rainbow Six: o Six Major e o Six Invitational, que reúnem as melhores equipes do mundo.
</p>

                <?php
                if ( isset($_SESSION['usuario']) ){
                    echo "<hr>
        <div class='card my-4'>
          <h5 class='card-header'>Comentar:</h5>
          <div class='card-body'>
            <form action='comentR6' method='post'>
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
LEFT JOIN tema t ON t.id=p.usuario_id where tema_id=2");

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


       