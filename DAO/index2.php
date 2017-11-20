<?php 

require_once("config.php");

$root = new Usuario();

$root->loadById(6);

//echo var_dump($root);

echo $root;

 ?>