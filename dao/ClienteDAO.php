<?php
require_once __DIR__ . '/../util/Conexao.php';
require_once __DIR__ . '/../model/Cliente.php';

class ClienteDAO{
    public function salvar(Cliente $cliente)
    {
        $conn =  Conexao::getConexao();
        $stmt = $conn->prepare("INSERT INTO clientes (nome, endereco, idade, cpf, media, casa, pessoasCasa, cep, numTel,
        dataNasc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssi", $cliente->getNome(), $cliente->getEndereco(), $cliente->getIdade(), $cliente->getCpf(), $cliente->getMedia(),
        $cliente->getCasa(), $cliente->getPessoasCasa(), $cliente->getCep(), $cliente->getNumTel(), $cliente->getDataNasc());
        
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function atualizar(Cliente $cliente)
    {
        $conn =  Conexao::getConexao();
        $stmt = $conn->prepare("UPDATE clientes SET nome=?, endereco=?, idade=?, cpf=?, media=?, casa=?, pessoasCasa=?, cep=?, numTel=?, getDataNasc=? WHERE id=?");
        $stmt->bind_param("ssii", $cliente->getNome(), $cliente->getEndereco(), $cliente->getIdade(), $cliente->getCpf(), $cliente->getMedia(),
        $cliente->getCasa(), $cliente->getPessoasCasa(), $cliente->getCep(), $cliente->getNumTel(), $cliente->getDataNasc(), $cliente->getId());
        
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
        $result = $conn->query("SELECT id, nome, endereco, idade, cpf, media, casa, pessoasCasa, cep, numTel, dataNasc FROM clientes");
        $clientes = [];
        while ($row = $result->fetch_assoc()) {
            $cliente = new Cliente();
            $cliente->setId($row['id']);
            $cliente->setNome($row['nome']);
            $cliente->setEndereco($row['endereco']);
            $cliente->setIdade($row['idade']);
            $cliente->setCpf($row['cpf']);
            $cliente->setMedia($row['media']);
            $cliente->setCasa($row['casa']);
            $cliente->setPessoasCasa($row['pessoasCasa']);
            $cliente->setCep($row['cep']);
            $cliente->setNumTel($row['numTel']);
            $cliente->setDataNasc($row['dataNasc']);

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