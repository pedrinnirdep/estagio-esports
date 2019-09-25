<?php
session_start();

$con =  new PDO("mysql:host=localhost; dbname=blog","root","");

$sql = $con->prepare("INSERT INTO post (id, data, mensagem, usuario_id, tema_id) VALUES (null, now(), ?, ?, ?)");
$sql->execute( array($_POST['msg'], $_SESSION['usuario']->id, $_SESSION['tema_id']));

unset($_SESSION['tema_id']);

header("Location: r6.php");
?>