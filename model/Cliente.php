<?php

class Cliente {
    private $id;
    private $nome;
    private $endereco;
    private $idade;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}
