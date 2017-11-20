<?php 
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, desenha) VALUES('user', 'gfdsd');
$stmt = $conn->prepare("INSERT INTO tb_usuarios2 (desloguin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234545";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido OK!!!";

 ?>