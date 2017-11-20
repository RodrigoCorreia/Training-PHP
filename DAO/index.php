<?php 

require_once("config.php");

////Carega Lista de Usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);

////Carrega uma lista de usuarios buscando pelo loguin

//$search = Usuario::search("Jo");

//echo json_encode($search);

///Carrega um usuaio usando o login e a senha

//$usuario = new Usuario();

//$usuario->loguin("root", "!@#$");

//echo $usuario;

///Insert Usuario

//$aluno = new Usuario("Roberto", "xaaa");

//$aluno->insert();

//echo $aluno;

///Alterar Usuario

//$usuario = new Usuario();

//$usuario-> loadById(9);

//echo var_dump($usuario);

//$usuario->update("Rodrigo", "Hahahaha");

//echo $usuario;

///Delete usuario

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->delete();

echo $usuario;

 ?>