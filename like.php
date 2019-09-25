
<?php
session_start();

$con =  new PDO("mysql:host=localhost; dbname=blog","root","");

$sql = $con->prepare("SELECT * FROM curtida WHERE usuario_id=? and tema_id=?");
$sql->execute( array($_SESSION['usuario']->id, $_SESSION['tema_id']));
$row = $sql->fetchObject();


// Se o usuário foi localizado
if ($row){

	header("Location: lol.php");
}else{
	$sql = $con->prepare("INSERT INTO curtida (id, usuario_id, tema_id) values (null, ?, ?)");
	$sql->execute( array($_SESSION['usuario']->id, $_SESSION['tema_id']) );
    header("Location: index.php");
	//echo $sql->errorInfo()[2];
	
}
unset($_SESSION['tema_id']);

?>
