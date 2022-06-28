<?php
//quero criar 2 arrays e depois verificar os numeros em comum.
//depois de declarar os arrays, vou acionar um contador nos dois laços pra se caso o contador a for igual o contador b,
//quero que o numero seja printado na tela

$array_0 = array (0,1,3,4,6,8);
$array_1 = array (10,90,23,8,6);

//Rodar dois loopings e verificar se existe em um e no outro.
$em_comum = [];
for($i=0; $i < count($array_0); $i++){
  for($n = 0; $n < count ($array_1); $n++){
     if($array_0[$i] === $array_1[$n]){
        //número em comum
        $em_comum[] = $array_0[$i];
     }
  }
}


//fiquei com duvida nessa sintaxe.. acredito que entender a funçao do $key => $value parece ser inportante
foreach ($em_comum as $key => $value) {
    echo $value;
    echo '<br>';
}




?>
