<?php
$dados =  array(
    [
        "id" => 1,
        "nome" => "Ana Patricia",
        "fone" => "(67) 982178621",
        "email" => "anapatricia@gmail.com"
    ],
    [
        "id" => 2,
        "nome" => "Leandro",
        "fone" => "(67) 996494429",
        "email" => "leandro@gmail.com"
    ],
    [
        "id" => 3,
        "nome" => "Marcos",
        "fone" => "(67) 984568712",
        "email" => "marcos@gmail.com"
    ]
);
for ($i = 0; $i < count($dados); $i++) {
    echo $dados[$i]["id"] . "<br>";
    echo $dados[$i]["nome"] . "<br>";
    echo $dados[$i]["fone"] . "<br>";
    echo $dados[$i]["email"] . "<br>";
}