<?php 

$conn = new mysqli("localhost","root","","dbphp7");//digitar o endereço

if($conn->connect_error){
	echo "Error: ". $conn->connect_error;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (desloguin, dessenha) VALUES (?,?)");

$stmt->bind_param("ss",$loguin,$pass);

$loguin = "user";
$pass = "123456";

$stmt->execute();

$loguin = "root";
$pass = "!@#$";

$stmt->execute();


 ?>