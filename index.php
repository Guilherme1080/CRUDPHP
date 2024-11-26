<?php
require './Entity/Cliente.php';

$nome = "igor";
$cpf = "78945612355";
$email = "igor@gmail.com";

$cliente = new Cliente($nome,$cpf,$email);

$resposta_servidor = $cliente->cadastrar();

if($resposta_servidor == true){
    echo "cliente cadastrado com sucesso!!";
}else{
    echo "Erro ao cadastrar";
}
