<?php

$Frutas = array('apple', 'orange', 'teles', 'gabriel');
echo '<pre>';
var_export($Frutas);
echo '</pre>';


//Exemplo com foreach => para cada
foreach ($Frutas as $fruta) {
    echo "A fruta é: {$fruta}<br>";
}

echo '<br>';

//Exemplo com for simples
for ($p = 0; $p < sizeof($Frutas); $p++) {
    echo "A fruta é: {$Frutas[$p]}<br>";
}

echo '<br>';


//Exemplo com while
$cont = 0;
while ($cont < sizeof($Frutas)) {
    echo "A fruta é: {$Frutas[$cont]}<br>";
    $cont++;
}
?>
