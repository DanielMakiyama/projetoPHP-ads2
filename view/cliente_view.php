<!-- view/cliente_view.php -->
<?php
$clientes = $_REQUEST['clientes'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Sistema SSVP</title>
  <meta name="description" content= "Texto teste para a description"> 
  <link rel="stylesheet" type="text/css" href="/projeto/style.css">

  <style>
    footer {
    text-align: left;
    }
    .center-div {
    text-align: center;
    }

    table{
    border-collapse: collapse;
    width: 100%;
    background-color: white;
    margin-bottom: 3rem;
    }

    th, td {
    border: 1px solid #000;
    padding: 8px;
    text-align: center;

    }

    th {  
    background-color:#20375a;
    font-weight: bold;
    color:white;
    }
    a button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    }

    a button:hover {
    background-color: #0056b3;
    }

    a[href*="criar"] button {
    background-color: #28a745;
    margin-bottom: 1rem;
    }

    a[href*="criar"] button:hover {
    background-color: #1e7e34;
    }
  </style>
</head>

<body>
  <header>  
    <nav>
      <a class="logo" href="https://www.ssvpbrasil.org.br/">SSVP</a>
      <ul class="menu">
        <li><a>Início</a></li>
      </ul>
      <a class="git" href="https://github.com/DanielMakiyama/projetoPHP-ads2">Github</a>
    </nav>
  </header>

  
  <main>
      <div class="hero-principal">
        <section class="hero">
          <header class="hero-content">
            <span class="cor-azul">SISTEMA DE ORGANIZAÇÃO PARA CONFERÊNCIAS</span>
            <h1>Sociedade São Vicente de Paulo</h1>
            <hr/>
            <h2 class="hero-sub">Conferência Nossa Senhora Aparecida</h2>
          </header>
        </section>
      </div>

      <section class="text1">
        <header class="text1-cabeca">
          <span class="cor-azul">TRABALHO ACADÊMICO ORIENTADO PELO PROFESSOR PEDRO TOLEDO</span>
          <h2 class="text1-title">Sistema CRUD com banco de dados</h2>
          <p class="text1-subtitle">Pensando em 2019 quando eu participava de uma organização da minha igreja católica
            que era a SSVP, eu lembrei que toda a documentação das pessoas que a sociedade ajudava
            era totalmente feita em papéis, nada era documentado virtualmente. Diante disso resolvi aproveitar e aplicar 
            este trabalho neste tema.
          </p>
        </header>

          <div class="text1-container">
            <div class="text1-container-card">
              <header class="text1-container-cabeca">
                <div class="text1-card-detalhes">
                  <span class="cor-branca">Um pouco sobre...</span>
                  <h3 class="cor-branca-title">O que é a SSVP?</h3>
                  <p class="cor-branca">A Sociedade São Vicente de Paulo é uma organização católica que se dedica a ajudar
                    os mais necessitados através de caridade e do serviço. Fundado em 1833 por Antônio Frederico
                  Ozam. </p>
                </div>  
              </header>
            <div>
                <span class="cor-branca">SSVP</span>
          </div>
      </section>
  </main>

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
                  <th>Código</th>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Idade</th>
                  <th>Cpf</th>
                  <th>Cep</th>
                  <th>Media Salárial</th>
                  <th>Situação de moradia</th>
                  <th>Quantidade de Pessoas na casa</th>
                  <th>Número de Telefone</th>
                  <th>Data de Nascimento</th>
                  <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                  
              <tr>
                <td><?php echo htmlspecialchars($cliente->getId()); ?></td> 
                <td><?php echo htmlspecialchars($cliente->getNome()); ?></td>
                <td><?php echo htmlspecialchars($cliente->getEndereco()); ?></td> 
                <td><?php echo htmlspecialchars($cliente->getIdade()); ?></td>
                <td><?php echo htmlspecialchars($cliente->getCpf()); ?></td>
                <td><?php echo htmlspecialchars($cliente->getCep()); ?></td>
                <td><?php echo htmlspecialchars(isset($cliente) && $cliente->getMediaSal() !== null ? $cliente->getMediaSal() : ''); ?></td>
                <td><?php echo htmlspecialchars(isset($cliente) && $cliente->getCasa() !== null ? $cliente->getCasa() : ''); ?></td>
                <td><?php echo htmlspecialchars($cliente->getPessoasCasa()); ?></td>
                <td><?php echo htmlspecialchars($cliente->getNumTel()); ?></td>
                <td><?php echo htmlspecialchars($cliente->getDataNasc()); ?></td>
                <td>
                  <a href="index.php?action=editar&id=<?php echo $cliente->getId(); ?>"><button type="button">Editar</button></a>
                  <a href="index.php?action=excluir&id=<?php echo $cliente->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><button type="button">Excluir</button></a>
                </td>
              </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
          <a href="index.php?action=criar"><button type="button">Adicionar Cliente</button></a>
        </div>
        
</body>

  <footer>
      <p class="cor-azul"> TRABALHO FEITO POR: </p>
      <p class="autores"> Daniel Shizuo Moura Makiyama </p>
      <p class="autores"> Fabricio de Souza Gonçalves </p>
  </footer>

</html>