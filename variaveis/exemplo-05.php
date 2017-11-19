<?php

$nome = "Glaucio";

function teste(){

	global $nome;
	echo $nome;
}

function teste2(){

	echo "joão"." agora no teste 2";
}

teste();
teste2();

?>