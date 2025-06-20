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

    public function setId($id){
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

    public function setMedia($media){
        $this->media = $media;
    }
    public function getMedia()
    {
        return $this->media;
    }

    public function setCasa($casa){
        $this->casa = $casa;
    }
    public function getCasa()
    {
        return $this->casa;
    }
    
    public function setPessoasCasa($pessoasCasa){
        $this->pessoasCasa = $pessoasCasa;
    }
    public function getPessoasCasa()
    {
        return $this->pessoasCasa;
    }
    
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCep()
    {
        return $this->cep;
    }
    
    public function setnumTel($numTel){
        $this->numTel = $numTel;
    }
    public function getnumTel()
    {
        return $this->numTel;
    }

    public function setdataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
    public function getdataNasc()
    {
        return $this->dataNasc;
    }


}
