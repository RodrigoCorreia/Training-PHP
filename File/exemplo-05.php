<?php 

$file = fopen("teste.txt","w+");

fclose($file);

unlink("teste.txt");

echo "aquivo deletado com sucesso";


 ?>