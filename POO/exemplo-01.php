<?php 

class Pessoa {

	public $nome; //Atributo

	public function falar(){ //Método

		return "O meu nome é: " . $this->nome;

	}

}

$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Correia";
echo $rodrigo->falar();

 ?>
