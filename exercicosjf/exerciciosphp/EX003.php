<?php
//fazer um array com alguns nomes repetidos e quero separar esses recorrentes 
//do restante do array
//*necessario revisar => !isset, 

$array = array ('Guilherme', 'joao','Lucas','Guilherme','Matheus','Gustavo', 'joao', 'joao');


//revisar  $arrayRepetido recebendo = 'array' (?)
$arrayRepetido = array ();

for($i = 0; $i < count($array); $i++){
    $valorAtual = $array[$i];
    if(!isset($arrayRepetido[$valorAtual])){
      $arrayRepetido[$valorAtual] = 0;

    }
    else{
        $arrayRepetido[$valorAtual]++;
    }
}

foreach ($arrayRepetido as $key => $value) {
    echo 'o nome do ';
    echo $key ;
    echo ' se repetiu ';
    echo $value;
    if ($value>1){
        echo ' vezes';
    }
    else{
        echo ' vez';

    }

    echo '<hr>';
}






?>