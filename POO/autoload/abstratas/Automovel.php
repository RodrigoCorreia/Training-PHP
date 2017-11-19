<?php 


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

 ?>