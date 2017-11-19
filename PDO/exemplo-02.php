<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa",""); //(tipo_banco:nome_banco;hont,login,senha)

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY desloguin");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


//var_dump($results);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>". $key . "</strong>" . $value . "<br/>";
	}

	echo "=================================<br>";
}

 ?>