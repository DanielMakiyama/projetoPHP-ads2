<?php
require_once __DIR__ . '/../model/Cliente.php';
require_once __DIR__ . '/../dao/ClienteDAO.php';

class ClienteController
{
    public function listar()
    {
        $clientedao = new ClienteDAO();
        $clientes = $clientedao->listar();
        $_REQUEST['clientes'] = $clientes;
        require_once __DIR__ . '/../view/cliente_view.php';
    }

    public function criar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente = new Cliente();
            $clientedao = new ClienteDAO();
            $cliente->setNome($_POST['nome']);
            $cliente->setEndereco($_POST['endereco']);
            $cliente->setIdade($_POST['idade']);
            $cliente->setCpf($_POST['cpf']);
            $cliente->setMedia($_POST['media']);
            $cliente->setCasa($_POST['casa']);
            $cliente->setPessoasCasa($_POST['pessoasCasa']);
            $cliente->setCep($_POST['cep']);
            $cliente->setNumTel($_POST['numTel']);
            $cliente->setDataNasc($_POST['dataNasc']);

            $clientedao->salvar($cliente);
            header('Location: index.php');
            exit();
        }
        require_once __DIR__ . '/../view/cliente_form.php';
    }

    public function editar()
    {
        $cliente = new Cliente();
        $clientedao = new ClienteDAO();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente->setId($_POST['id']);
            $cliente->setNome($_POST['nome']);
            $cliente->setEndereco($_POST['endereco']);
            $cliente->setIdade($_POST['idade']);
            $cliente->setCpf($_POST['cpf']);
            $cliente->setMedia($_POST['media']);
            $cliente->setCasa($_POST['casa']);
            $cliente->setPessoasCasa($_POST['pessoasCasa']);
            $cliente->setCep($_POST['cep']);
            $cliente->setNumTel($_POST['numTel']);
            $cliente->setDataNasc($_POST['dataNasc']);
            $clientedao->atualizar($cliente);
            header('Location: index.php');
            exit();
            
        } else {
            $cliente->setId($_GET['id']);
            $cliente = $clientedao->buscarPorId($cliente->getId());
            $_REQUEST['cliente'] = $cliente;
            require_once __DIR__ . '/../view/cliente_form.php';
        }
    }

    public function excluir()
    {
        $cliente = new Cliente();
        $clientedao = new ClienteDAO();
        $cliente->setId($_GET['id']);
        $clientedao->excluir($cliente);
        header('Location: index.php');
        exit();
    }
}