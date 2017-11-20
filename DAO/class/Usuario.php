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

			$this->setData($results[0]);

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

			$this->setData($results[0]);

		
		}else{
			throw new Exception("Loguin ou senha invalidos!");
			
		}

	}

	public function setData($data){

		$this->setUsuario($data['id_usuario']);
		$this->setDesLoguin($data['desloguin']);
		$this->setDesSenha($data['dessenha']);
		$this->setDtCadastro(new DateTime($data['dtcadastro']));	

	}

	public function insert(){
			$sql = new Sql();
			$results = $sql->select("CALL sp_usuarios_insert(:LOGUIN, :PASSWORD)", array(
				'LOGUIN'=>$this->getDesLoguin(),
				'PASSWORD'=>$this->getDesSenha()
			));

			if(count($results) > 0){
				$this->setData($results[0]);
			}
	}

	public function update($loguin, $password){
		
		$this->setDesLoguin($loguin);
		$this->setDesSenha($password);

		$sql = new Sql();



		$sql->query("UPDATE tb_usuarios2 SET desloguin = :LOGUIN, dessenha = :PASSWORD WHERE id_usuario = :ID", array(
			':LOGUIN'=>$this->getDesloguin(),
			':PASSWORD'=>$this->getDesSenha(),
			':ID'=>$this->getIdUsuario()

		));

	}

	public function __construct($loguin = "", $password = ""){
			$this->setDesLoguin($loguin);
			$this->setDesSenha($password);
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