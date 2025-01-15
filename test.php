<?php



$array = ['sobrenome', 'email', 'telefone'];
var_dump(implode(",", $array)); // string(24) "sobrenome,email,telefone"

// String vazia ao usar um array vazio:
var_dump(implode('olá', [])); // string(0) ""

// O separador é opcional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"

?>