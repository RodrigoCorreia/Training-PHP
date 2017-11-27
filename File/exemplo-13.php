<?php 


$data = array(
	"empresa"=>"Rodrigo Terinamento"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

 ?>