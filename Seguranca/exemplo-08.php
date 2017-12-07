<form method="post">
	
	<input type="text" name="busca">
	<button type="subimit">Enviar</button>

</form>

<?php 


if(isset($_POST['busca'])){


	//echo strip_tags($_POST['busca']); //
	//echo strip_tags($_POST['busca'],"<strong><a>"); //Se quiser manter as tags <strong> e <a>

	echo htmlentities($_POST['busca']);

}


 ?>