<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$stmt = $conn->prepare("DELETE FROM tb_usuarios2 WHERE id_usuario = :ID");

$id = 1;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Delete ok!!!";

 ?>