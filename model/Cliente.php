<?php

class Cliente {
    private $id;
    private $nome;
    private $endereco;
    private $idade;
    private $cpf;
    private $cep;
    private $mediaSal;


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

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setMediaSal($mediaSal){
        $this->mediaSal = $mediaSal;
    }

    public function getMediaSal()
    {
        return $this->mediaSal;
    }
}