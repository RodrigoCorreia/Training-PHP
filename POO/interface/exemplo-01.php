<?php 

interface Veiculo{
	public function acelecar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo{

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

$carro = new Civic();

$carro->trocarMarcha(1);

 ?>