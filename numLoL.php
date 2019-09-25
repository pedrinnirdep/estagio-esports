<?php
session_start();

$con =  new PDO("mysql:host=localhost; dbname=blog","root","");

$sql = $con->prepare("SELECT COUNT(*) FROM curtida WHERE tema_id=? as contador");
$sql->execute( array($_SESSION['tema_id']->id));

$row = $sql->fetchAll(PDO::FETCH_CLASS);
$_SESSION['like']=$row;

$_SESSION['like']->contador;

unset($_SESSION['tema_id']);

?>
