<?php

/* JavaScript Object Notation */

/* Instale a extensão JSON VIEW */

#Notação criada basicamente para o JS
#Grande maioria das linguagens de programação geram arquivos no formato JSON
#No JSON é realizada uma serialização


$pessoas = array();
array_push($pessoas, array(
    'nome' => 'Gabriel',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Daniel',
    'idade' => '11'
));

array_push($pessoas, array(
    'profissão' => 'Empreendedores'
));
/* Pegar um array e transformar em um JSON */
echo json_encode($pessoas);
//__________________________________________________________________________________________________________

/* Pegar um JSON e transformar em um array */
$json = '[{"nome":"Gabriel","idade":20},{"nome":"Daniel","idade":"11"},{"profiss\u00e3o":"Empreendedores"}]';
$data = json_decode($json, true);
//var_dump($data);



