<?php

//POO 
class Produto
{ 
    private $id;
    private $descricao;
    private $preco;

    public function __construct($id, $descricao, $preco){ 
        $this->id = $id;
        $this->descricao = $descricao;
        $this->preco = $preco; 
    }

    public function getId(){
        return $this->id;
    }
    public function getDescricao(){
        return $this->descricao; 
    }
    public function getPreco(){
        return $this->preco;
    }
}