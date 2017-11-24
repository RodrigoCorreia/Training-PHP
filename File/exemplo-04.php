<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios2 ORDER BY desloguin");

//print_r($usuarios);


// criando arquivo csv

$headers = array();

///arrumando o cabecalho
foreach ($usuarios[0] as $key => $value) {

	array_push($headers, ucfirst($key));

}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

//Inserindo os dados
foreach ($usuarios as $row) {
	
	$data = array();

	foreach ($row as $key => $value) {

		array_push($data, $value);

	}// End Coluna

	fwrite($file, implode(",", $data) . "\r\n");

} //End linha

fclose($file);

 ?>