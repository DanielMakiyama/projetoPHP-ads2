<?php
require_once __DIR__ . '/../models/Produto.php';
class ProdutoController
{
    public function listar()
    {
        //Simulando a obtenção de dados de um banco de dados 
        $produtos = [
            new Produto(1, "Camiseta", 44.99),
            new Produto(2, "Calça", 59.99),
        ];

        //Carregando a View e passando os produtos 

        require_once __DIR__ . '/../views/ProdutoView.php';
    }
}