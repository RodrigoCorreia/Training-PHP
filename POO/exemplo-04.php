<?php 

class Endereco {

	private $lougadouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){

		$this->lougadouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct(){
		//var_dump("DESTRUIR");
	}

	public function __toString(){
		return $this->lougadouro.", ".$this->numero.", ".$this->cidade;
	}

}


$meuEndereco = new Endereco("Rua Ademar de Barros","123","Santos");

//var_dump($meuEndereco);

//unset($meuEndereco);

echo $meuEndereco;

 ?>