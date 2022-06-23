<?php
//preencher  array com numeros aleatorios sem numeros repetidos.
    $arr = [];
    for($i = 0; $i < 5; $i++){
      $arr[$i] = rand(1,10);
      while(inArrayCustom($i,$arr[$i],$arr)){
            $arr[$i] = rand(1,20);
    echo '<br>';
    }
}
function inArrayCustom($indice,$valor,$arr){
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i]== $valor && $i !=$indice){
            return true;
        }
    }
        return false;
}






?>