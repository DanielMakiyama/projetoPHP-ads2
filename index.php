<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/controller/ClienteController.php';

$controller = new ClienteController();
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

switch ($action) {
    case 'criar':
        $controller->criar();
        break;
    case 'editar':
        $controller->editar();
        break;
    case 'excluir':
        $controller->excluir();
        break;
    case 'listar':
    default:
        $controller->listar();
        break;
}
?>