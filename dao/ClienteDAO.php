<?php
require_once __DIR__ . '/../util/Conexao.php';
require_once __DIR__ . '/../model/Cliente.php';

class ClienteDAO{
    public function salvar(Cliente $cliente)
    {
        $conn =  Conexao::getConexao();
        $stmt = $conn->prepare("INSERT INTO clientes (nome, endereco, idade, cpf, cep, mediaSal) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss", 
            $cliente->getNome(),
            $cliente->getEndereco(),
            $cliente->getIdade(),
            $cliente->getCpf(),
            $cliente->getCep(),
            $cliente->getMediaSal()
        );
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function atualizar(Cliente $cliente)
    {
        $conn =  Conexao::getConexao();
        $stmt = $conn->prepare("UPDATE clientes SET nome=?, endereco=?, idade=?, cpf=?, cep=?, mediaSal=? WHERE id=?");
        $stmt->bind_param("ssisssi",
            $cliente->getNome(),
            $cliente->getEndereco(), 
            $cliente->getIdade(), 
            $cliente->getCpf(), 
            $cliente->getCep(), 
            $cliente->getMediaSal(), 
            $cliente->getId());

        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function excluir(Cliente $cliente)
    {
        $conn =  Conexao::getConexao();
        $stmt = $conn->prepare("DELETE FROM clientes WHERE id=?");
        $stmt->bind_param("i", $cliente->getId());
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function listar()
    {
        $conn =  Conexao::getConexao();
        $result = $conn->query("SELECT id, nome, endereco, idade, cpf, cep, mediaSal FROM clientes");
        $clientes = [];
        while ($row = $result->fetch_assoc()) {
            $cliente = new Cliente();
            $cliente->setId($row['id']);
            $cliente->setNome($row['nome']);
            $cliente->setEndereco($row['endereco']);
            $cliente->setIdade($row['idade']);
            $cliente->setCpf($row['cpf']);
            $cliente->setCep($row['cep']);
            $cliente->setMediaSal($row['mediaSal']);

            $clientes[] = $cliente;
        }
        $conn->close();
        return $clientes;
    }

    public function buscarPorId($id)
    {
        $conn =  Conexao::getConexao();
        $stmt = $conn->prepare("SELECT id, nome FROM clientes WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $cliente = $result->fetch_object('Cliente');
        $stmt->close();
        $conn->close();
        return $cliente;
    }   
}