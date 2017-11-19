<?php 

$a = 10;

function trocaValor($a){

	$a += 50;
	return $a;

}

function trocaValorReferencia(&$a){

	$a += 50;
	return $a;

}

echo trocaValor($a);

echo "<br>";

echo $a;

echo "<br>"
;
echo trocaValorReferencia($a);

echo "<br>";

echo $a;

 ?>