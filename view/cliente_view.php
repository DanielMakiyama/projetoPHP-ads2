<!-- view/cliente_view.php -->
<?php
$clientes = $_REQUEST['clientes'];
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    /* Centralizar o div */
    .center-div {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Estilizar a tabela */ 
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    tr,
    td {
      padding: 8px;
      text-align: center;
    }
  </style>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Implementando MVC</title>
</head>

<body>
  <br><br><br>
  <h1 class="center-div">Lista de Assistido</h1>
  <br><br><br>
  <div class="center-div">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-auto">

          <table class="table">
            <thead class="thead-dark">
              <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Idade</th>
                  <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
              <tr>
                <td><?php echo htmlspecialchars($cliente->getId()); ?></td> 
                <td><?php echo htmlspecialchars($cliente->getNome()); ?></td>
                <td><?php echo htmlspecialchars($cliente->getEndereco() ?? ''); ?></td>
                <td><?php echo htmlspecialchars($cliente->getIdade()); ?></td>
                <td><?php echo htmlspecialchars($cliente->getCpf() ?? ''); ?></td>
                <td><?php echo htmlspecialchars($cliente->getMedia() ?? ''); ?></td>
                <td><?php echo htmlspecialchars($cliente->getCasa() ?? ''); ?></td>
                <td><?php echo htmlspecialchars($cliente->getPessoasCasa() ?? ''); ?></td>
                <td><?php echo htmlspecialchars($cliente->getCep() ?? ''); ?></td>
                <td><?php echo htmlspecialchars($cliente->getNumTel() ?? ''); ?></td>
                <td><?php echo htmlspecialchars($cliente->getDataNasc() ?? ''); ?></td>
                
                <td>
                  <a href="index.php?action=editar&id=<?php echo $cliente->getId(); ?>"><button type="button" class="btn btn-success">Editar</button></a>
                  <a href="index.php?action=excluir&id=<?php echo $cliente->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><button type="button" class="btn btn-danger">Excluir</button></a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <a href="index.php?action=criar"><button type="button" class="btn btn-primary">Adicionar Cliente</button></a>
        </div>
</body>

</html>