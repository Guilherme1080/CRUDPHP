<?php
require './DB/Database.php';

class Cliente{
    public int $id;
    public string $nome;
    public string $cpf;
    public string $email;

    public function __construct(string $nome,string $cpf, string $email){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function cadastrar(){
        $db = new Database('cliente');
        $db->insert(
            [
                'nome' => $this->nome,
                'cpf' => $this->cpf,
                'email' => $this->email
            ]
        );
        return true;
    }
}