<?php

/**
 * Biblioteca GD: Gera imagens,reprocessa tamanho de imagens, podendo gerar certificado
  Eixo X,Y - GD
  Gerar thumbnail - Pegar imagem e reduzir
 */
/* Quando é colocado o header, se der algum tipo de erro no código é mais complicado de arrumar */
header("Content-Type: image/png");

/* Variável definida para manipular os dados da imagem */

/* Definindo o tamanho da imagem */
$image = imagecreate(256, 256);

/* Definindo a paleta de cores */
$black = imagecolorallocate($image, 0, 0, 0);

/* Definindo a cor vermelha */
$red = imagecolorallocate($image, 255, 0, 0);

/* Escrever algo na tela */
imagestring($image, 5, 60, 120, "Curso de php 7", $red);

/* Tipo de formato de arquivo que deve ser gerado */
imagepng($image);

/* Destruir essa variável para que ela não fique pendurada no php */
imagedestroy($image);
?>