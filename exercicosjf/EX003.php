<?php
//fazer um array com alguns nomes repetidos e quero separar esses recorrentes 
//do restante do array
//*necessario revisar => !isset, 

$array = array ('Guilherme', 'joao','Lucas','Guilherme','Matheus','Gustavo');


//revisar  $arrayRepetido recebendo = 'array' (?)
$arrayRepetido = array ();

for($i = 0; $i < count($array); $i++){
    $valorAtual = $array[$i];
    if(!isset($arrayRepetido[$valorAtual])){
      $arrayRepetido[$valorAtual] = 0;

    }else{
        $arrayRepetido[$valorAtual]++;
    }
}
//no caso, para descobrir quantas vezes o nome se repetiu, basta considerar como $value
//o elemento que se repete
foreach ($arrayRepetido as $key => $value) {
    echo $key;
    echo $value;
    echo '<hr>';
}






?>