<?php

$nome = filter_input(INPUT_GET, 'nome');
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);


if($nome) {
    
    echo 'Nome: '.$nome."<br/>";
    echo 'Idade: '.$idade."<br/>";
    echo 'Email: '.$email;

} else {
   header("location: portfolio\Frontend\src\html\index.html");
   exit;
}

