<?php 

//function ola($texto = "mundo", $periodo = "Bom dia"){
function ola($texto, $periodo = "Bom dia"){

	return "Olá $texto! $periodo<br>";
}

echo ola("Mundo");
echo ola("", "Boa Noite");
echo ola("rodrigo");
echo ola("Miguel", "Boa Tarde");

 ?>