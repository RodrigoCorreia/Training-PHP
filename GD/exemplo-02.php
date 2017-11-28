<?php 

$image = imagecreatefromjpeg("Images/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Rodrigo Correia", $titleColor);
imagestring($image, 5, 440, 370, utf8_decode("Concluído: ") . date("d/m/Y"), $titleColor);


header("Content-type: image/jpeg");

//imagejpeg($image); //Ver na pagina web

//imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg"); //Baixa o arquivo em alta qualidade

imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10); //Dimiui a qualidade para 10%

imagedestroy($image);


 ?>