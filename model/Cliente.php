<?php

class Cliente {
    private $id;
    private $nome;
    private $endereco;
    private $idade;
    private $cpf;
    private $media;
    private $casa;
    private $pessoasCasa;
    private $cep;
    private $numTel;
    private $dataNasc;

    //id
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    //nome do assistido
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    //endereço
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }

    //idade do assistido
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getIdade()
    {
        return $this->idade;
    }

    //cpf
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }

    //média salárial 
    public function setMedia($media){
        $this->media = $media;
    }
    public function getMedia()
    {
        return $this->media;
    }

    //estado atual da casa
    public function setCasa($casa){
        $this->casa = $casa;
    }
    public function getCasa()
    {
        return $this->casa;
    }
    
    //numero de pessoas dentro da casa
    public function setPessoasCasa($pessoasCasa){
        $this->pessoasCasa = $pessoasCasa;
    }
    public function getPessoasCasa()
    {
        return $this->pessoasCasa;
    }
    
    //cep
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCep()
    {
        return $this->cep;
    }
    
    //numero de telefone 
    public function setnumTel($numTel){
        $this->numTel = $numTel;
    }
    public function getnumTel()
    {
        return $this->numTel;
    }

    //data de nascimento
    public function setdataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
    public function getdataNasc()
    {
        return $this->dataNasc;
    }


}
