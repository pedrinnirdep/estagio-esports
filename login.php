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
      <a class="navbar-brand"  href="index.php">Royal eSports</a>
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
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	
	
 <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
		<div class="col-md-12 text-center mb-5">
            <img src="imagens/logo2.png">
			</div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- form card login -->
                    <div class="card rounded-0" id="login-form">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="post" action="autenticacao.php">
                                <div class="form-group">
                                    <label for="uname1">E-mail:</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" name="email" id="uname1" required="">
     
                                </div>
                                <div class="form-group">
                                    <label>Senha:</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="senha" id="pwd1" required="">
                        
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                     <a href="cad2.php" class="register-form-link">Cadastrar</a>
                                    </label>
									
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
  </div>
  </div>
  
  
  
  
  
  </body>
  
  </html>
  