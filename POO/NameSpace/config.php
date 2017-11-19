<?php 

spl_autoload_register(function($nameClass){

	//var_dump($nameClass);
	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	if(DIRECTORY_SEPARATOR != '\\'){
		$filename = str_replace('\\',DIRECTORY_SEPARATOR,$filename);
	}
	//var_dump($filename);

	if(file_exists($filename)){
		require_once($filename);
	}

});


 ?>