<?php 

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);


imagestring($image, 5, 30, 120, "Rodrigo Treinamento PHP", $red);

imagepng($image);

imagedestroy($image);

 ?>