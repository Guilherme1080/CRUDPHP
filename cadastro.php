<?php
require './Entity/Cliente.php';
$dados = new Cliente('','','');
$clientes_banco = $dados->buscar();

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $cliente = new Cliente($nome,$cpf,$email);
}