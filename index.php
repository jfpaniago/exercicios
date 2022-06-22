<?php
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