<?php 

interface Veiculo{
	public function acelecar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

	public function acelecar($velocidade){
		echo "O Veiculo acelerou até: ".$velocidade." Km/h";
	}	

	public function frenar($velocidade){
		echo "O Veiculo frenou até: ".$velocidade." Km/h";
	}

	public function trocarMarcha($velocidade){
		echo "O Veiculo engatou a marcha ". $velocidade;
	}

}

class DelRey extends Automovel{

	public function empurrar(){

	}
}

//$carro = new DelRey();
//$carro->acelecar(200);
$carro = new Automovel();
$carro->acelecar(200);

 ?>