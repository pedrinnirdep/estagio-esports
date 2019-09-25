
<?php
session_start();

$con =  new PDO("mysql:host=localhost; dbname=blog","root","");

$sql = $con->prepare("SELECT * FROM usuario WHERE email=?");
$sql->execute( array(($_POST['email'])));
$row = $sql->fetchObject();
 // devolve um único registro

// Se o usuário foi localizado
if ($row){
	echo "<script>alert('Já existe um login com este e-mail')</script>";
    header("Location: login.php");
}else{
	$sql = $con->prepare("INSERT INTO usuario (id, nome, email, foto, senha) values (null, ?, ?, null, ?)");
	$sql->execute( array($_POST['nome'], $_POST['email'], md5($_POST['senha']) ) );
    header("Location: login.php");
	//echo $sql->errorInfo()[2];
	
}

?>