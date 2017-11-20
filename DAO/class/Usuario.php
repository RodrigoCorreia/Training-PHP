<?php 

class Usuario {
	private $idusuario;
	private $desloguin;
	private $dessenha;
	private $dtcadastro;

	public function getIdUsuario(){
		return $this->idusuario;
	}

	public function setUsuario($value){
		$this->idusuario = $value;
	}

	public function getDesLoguin(){
		return $this->desloguin;
	}

	public function setDesLoguin($value){
		$this->desloguin = $value;
	}

	public function getDesSenha(){
		return $this->dessenha;
	}

	public function setDesSenha($value){
		$this->dessenha = $value;
	}

	public function getDtCadastro(){
		return $this->dtcadastro;
	}

	public function setDtCadastro($value){
		$this->dtcadastro = $value;
	}

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios2 WHERE id_usuario = :ID", array(
			":ID"=>$id
		));

		if(count($results) > 0){

			$row = $results[0];

			$this->setUsuario($row['id_usuario']);
			$this->setDesLoguin($row['desloguin']);
			$this->setDesSenha($row['dessenha']);
			$this->setDtCadastro(new DateTime($row['dtcadastro']));			
		}
	}

	public static function getList(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios2 ORDER BY desloguin");

	}

	public static function search($loguin){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios2 WHERE desloguin LIKE :SEARCH ORDER BY desloguin ", array(
			':SEARCH'=>"%".$loguin."%"
		));

	}

	public function loguin($loguin, $password){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios2 WHERE desloguin = :LOGUIN AND dessenha = :PASSWORD", array(
			":LOGUIN"=>$loguin,
			":PASSWORD"=>$password
		));

		if(count($results) > 0){

			$row = $results[0];

			$this->setUsuario($row['id_usuario']);
			$this->setDesLoguin($row['desloguin']);
			$this->setDesSenha($row['dessenha']);
			$this->setDtCadastro(new DateTime($row['dtcadastro']));			
		}else{
			throw new Exception("Loguin ou senha invalidos!");
			
		}

	}

	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"desloguin"=>$this->getDesLoguin(),
			"dessenha"=>$this->getDesSenha(),
			"dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
		));
	}

}

 ?>