<?php 

$conn = new mysqli("localhost","root","","dbphp7");//digitar o endereço

if($conn->connect_error){
	echo "Error: ". $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY desloguin");


$data = array();

#while ($row = $result->fetch_array()) {
while ($row = $result->fetch_assoc()) {
	
	array_push($data, $row);
	//var_dump($row);

}

echo json_encode($data);

 ?>