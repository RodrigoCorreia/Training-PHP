<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$stmt = $conn->prepare("UPDATE tb_usuarios2 SET desloguin = :LOGIN, dessenha = :PASSWORD WHERE id_usuario = :ID");

$login = "João";
$password = "oplk";
$id = 2;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Modificado!!!";

 ?>