<?php 


$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios2 WHERE id_usuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback(); //caso queria o rollback
$conn->commit(); // caso queria proseguir

echo "Delete ok!!!";


 ?>