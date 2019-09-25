
<?php
session_start();
$_SESSION['tema_id']=3;
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
            <h1 class="mt-4">Counter Strike: Global Offensive</h1>

            <!-- Author -->
            <p class="lead">
                por
                <a href="">Vitor Henrique</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Postado em Março 24, 2019 ás 10:00</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="imagens/mibr2.jpg" alt="">

            <form>
                <h5 class='card-header'>Número de Likes: <?php

                    $conn =  mysqli_connect("127.0.0.1","root","", "blog");

                    //$sql = $con->prepare("SELECT COUNT(*) FROM curtida WHERE tema_id=3");

                    //$row = $sql->fetchAll(PDO::FETCH_CLASS);

                    //echo $row['count'];

                    $abc="SELECT count(*) as c FROM curtida WHERE tema_id=3";
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

            <p>Mibr amarga úlltimo lugar na BLAST Pro Series SP
                A MIBR perdeu para a Ninjas In Pyjamas (NiP) e terminou em último lugar na BLAST Pro Series
                São Paulo 2019, torneio de Counter Strike: Global Offensive (CS:GO). A úlltima rodada de jogos
                do campeonato também marcou a classificaçãoo da Astralis e Team Liquid para a final, que acontece
                neste sábado (23), Ã s 18h. A decisÃ£o será, uma série melhor de três (MD3).</p>

            <p>Em disputa contra a tradicional equipe da Ninjas in Pyjamas, o time brasileiro amargou sua quinta derrota no torneio.
                As equipes jogaram na Train. O embate começou bem para a MIBR, que dominou o início do mapa como Contra-Terrorista.
                No entanto, a NiP virou o jogo antes do fim da primeira metade, terminando a rodada com o placar de 8-7.
                O segundo half foi equilibrado, mas o time europeu venceu por 16-13.

            <p>O último jogo encerra a participaçãoo da MIBR no torneio. Apesar do apoio da torcida brasileira no GinÃ¡sio do Ibirapuera,
                o time teve um pÃ©ssimo desempenho no torneio e acabou em último lugar na tabela de classificação, com retrospecto de 5-0.
                A BLAST Pro SP o terceiro campeonato em que a MIBR participa desde que reformulou sua equipe e ganhou uma line up totalmente brasileira.

</p>



                <?php
                if ( isset($_SESSION['usuario']) ){
                    echo "<hr>
        <div class='card my-4'>
          <h5 class='card-header'>Comentar:</h5>
          <div class='card-body'>
            <form action='comentCS' method='post'>
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

$sql = $con ->prepare("SELECT * FROM post where tema_id=3");

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