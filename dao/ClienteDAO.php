<?php
require_once __DIR__ . '/../util/Conexao.php';
require_once __DIR__ . '/../model/Cliente.php';

class ClienteDAO{
    public function salvar(Cliente $cliente)
{
    $conn =  Conexao::getConexao();

    $stmt = $conn->prepare("INSERT INTO clientes 
        (nome, endereco, idade, cpf, media, casa, pessoasCasa, cep, numTel, dataNasc) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $nome = $cliente->getNome();
    $endereco = $cliente->getEndereco();
    $idade = $cliente->getIdade();
    $cpf = $cliente->getCpf();
    $media = $cliente->getMedia();
    $casa = $cliente->getCasa();
    $pessoasCasa = $cliente->getPessoasCasa();
    $cep = $cliente->getCep();
    $numTel = $cliente->getNumTel();
    $dataNasc = $cliente->getDataNasc();

    $stmt->bind_param("ssiiisiiis", 
        $nome, $endereco, $idade, $cpf, $media,
        $casa, $pessoasCasa, $cep, $numTel, $dataNasc
    );

    $stmt->execute();
    $stmt->close();
    $conn->close();
}


 public function atualizar(Cliente $cliente)
{
    $conn = Conexao::getConexao();
    $stmt = $conn->prepare("UPDATE clientes SET nome=?, endereco=?, idade=?, cpf=?, media=?, casa=?, pessoasCasa=?, cep=?, numTel=?, dataNasc=? WHERE id=?");

    // Crie variáveis para passar por referência
    $nome = $cliente->getNome();
    $endereco = $cliente->getEndereco();
    $idade = $cliente->getIdade();
    $cpf = $cliente->getCpf();
    $media = $cliente->getMedia();
    $casa = $cliente->getCasa();
    $pessoasCasa = $cliente->getPessoasCasa();
    $cep = $cliente->getCep();
    $numTel = $cliente->getNumTel();
    $dataNasc = $cliente->getDataNasc();
    $id = $cliente->getId();

    $stmt->bind_param("ssiiisiiiii",
        $nome,
        $endereco,
        $idade,
        $cpf,
        $media,
        $casa,
        $pessoasCasa,
        $cep,
        $numTel,
        $dataNasc,
        $id
    );

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