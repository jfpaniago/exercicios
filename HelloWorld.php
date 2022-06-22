<?php
//nesse Hello World eu fiz uma leitura dinamica das letras atraves de um laço de repetiçao
//que ignora os caracteres '-'e printa apenas as letras
$helloWorld = ['H','-','e','-','l','-','l','-','o','_','W','-','o','-','r','-','l','-','d','-','!'];
$string = '';
for ($i = 0; $i < count($helloWorld); $i++){
    if($helloWorld[$i] == '-'){
        continue;
    }
    $string.=$helloWorld[$i];

    
}
echo $string;




?>