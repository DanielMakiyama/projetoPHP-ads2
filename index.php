<?php
// Ativa exibição de erros no navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Carrega o controlador do produto
require_once __DIR__ . '/controllers/ProdutoController.php';

// Instancia o controlador e chama a função listar
$controller = new ProdutoController();
$controller->listar();
