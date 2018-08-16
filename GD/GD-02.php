<?php

/* Criar imagens a partir de uma determinada imagem */

$image = imagecreatefromjpeg("certificado.jpg");

/* Cor do texto */
$titleColor = imagecolorallocate($image, 0, 0, 0);

/* Cor cinza */
$gray = imagecolorallocate($image, 100, 100, 100);

/* Escrever na imagem */
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Gabriel Teles", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

/* Gera a imagem e salva no disco, podendo passar até mesmo a qualidade */
imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10);

/* Finaliza e libera alocação de memória */
imagedestroy($image);
?>

