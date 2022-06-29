<?php
//Nesse projeto, quero criar um formulario que receba os dados do cliente e verifique
//se o nome dele tem mais de 5 letras, se a idade é de fato um número e se o campo de email tem @

//1) Verificar se tem mais de 5 letras! (strlen)
//2) Se é número. (is_numeric)
//3) Se possui o @ (strstr = comando pra achar agulha no palheiro)

//isset = Verificar se existe = variavel ter valor ou ser criada.

if($_POST['acao'] != null){
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    if(strlen($nome) >=5){
        echo'Nosso nome tem mais ou igual a 6 letras!';
        echo'<br>';
    }

    if(is_numeric ($numero)){
        echo'É número!';
        echo'<br>';
    }
    
    if(strstr($email,'@') != ''){
        echo 'Tem email';
        echo'<br>';
        if(strstr($email,'gmail') != ''){
            echo 'e te digo mais: o email do bana é gmail!';
            echo'<br>';
        }
    }



}
?>
<form method="post">
    <input type = "text" name ="nome">
    <input type = "text" name ="numero">
    <input type = "text" name ="email">
    <input type = "submit"name ="acao">
</form>