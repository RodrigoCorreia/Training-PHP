<?php 

$id = (isset($_GET["id"])) ? $_GET["id"] : 3; //http://localhost/Seguranca/exemplo-03.php?id=4 OR 1 = 1 --

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM 	tb_usuarios2 WHERE id_usuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
	
	echo $resultado->desloguin . "<br>";
	var_dump($resultado);

}
 ?>