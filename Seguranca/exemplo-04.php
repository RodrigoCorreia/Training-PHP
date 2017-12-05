<?php 

$id = (isset($_GET["id"])) ? $_GET["id"] : 3;

if(!is_numeric($id) || strlen($id) > 5){
	exit("We got you!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM 	tb_usuarios2 WHERE id_usuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
	
	var_dump($resultado);

}
 ?>