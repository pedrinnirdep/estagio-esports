<?php
$con = NEW PDO("mysql:host=localhost; dbname=blog", "root","");

if(!empty($_POST)){
    $sql = $con ->prepare("INSERT into post(autor, mensagem, data) values(?,?)");
    $sql -> execute(array($_POST['autor'],$_POST['mensagem'],$_POST['data']));
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$con = new PDO( "mysql:host=localhost; dbname=blog", "root", "");

$sql = $con ->prepare("SELECT * FROM post");

$sql->execute();

$rows = $sql->fetchAll(PDO::FETCH_CLASS);

// fetchAll - recupera todos os registros
// PDO:: FETCH_CLASS - guardar no formato de objeto



echo "<table class= 'table table-striped table-hover'>";

foreach($rows as $row){

    $dt = date("m/d H:i",strtotime($row->date));
    echo"<tr><td>$row->id</td><td>$dt</td><td>$row->autor</td><td>$row->mensagem</td></tr>";

}


echo "</table>";

?>

</body>
</html>