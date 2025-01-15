<?php

require './Entity/Cliente.php';


//ESSAS VARIÁVEIS IRAO ARMAZENAR AS INFORMAÇOES VINDAS DO HTML, POR EXEMPLO
//PREENCHIMENTO DE UM FORMULÁRIO, TRATANDO
$nome = "MARCOS TAKARO";
$cpf = "45646546";
$email = "kaoro@takaro.com";

//INSTANCIANDO UM OBJETO DO TIPO CLIENTE, UM CLIENTE TEM ATRIBUTOS NOME,CPF,EMAIL
$cli = new Cliente($nome,$cpf,$email);

//CHAMA O MÉTODO PARA CADASTRAR ESSE CLIENTE QUE FOI INSTANCIADO
$cli->cadastrar();

//RESULT VARIÁVEL QUE CONTÉM UM ARRAY RETORNADO DO BANCO DE DADOS
$result = $cli->buscar();

foreach ($result as $pessoa){
    echo "<br> " .$pessoa['id'] . ' ' .$pessoa['nome'] ;
}