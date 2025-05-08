<?php
require '../Entity/Produto.php';

if(isset($_POST['nome'])){

    $objProd = new Produto();

    $objProd->nome = $_POST['nome'];
    $objProd->descricao = $_POST['desc'];
    $objProd->quantidade = $_POST['quantidade'];
    $objProd->preco = $_POST['preco'];
    $objProd->tipo = $_POST['tipo'];

    $res = $objProd->cadastrar();

    if($res){
        $array = ["status" => 200, "msg" => "cadastrado com Sucesso!"];
        echo json_encode($array);
    }
    else{
        $array = ["status" => 400, "msg" => "Erro"];
        echo json_encode($array);
    }
}
else{
    $array = ["msg" => "não veio nada no POST!!"];
    echo json_encode($array);
}

?>