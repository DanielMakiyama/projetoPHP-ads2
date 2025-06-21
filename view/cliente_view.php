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
</head>

<body>
  <header>
    <nav>
      <span class="logo">SSVP</span>
      <ul class="menu">
        <li><a>Início</a></li>
        <li><a>Lista de Assistidos</a></li>
        <li><a>Pag 3</a></li>
      </ul>
      <a class="git">Github</a>
    </nav>
  </header>

  
  <main>
      <div class="hero-principal"><
        <section class="hero">
          <header class="hero-content">
            <span class="cor-azul">SISTEMA DE ORGANIZAÇÃO PARA CONFERÊNCIAS</span>
            <h1>Sociedade São Vicente de Paulo</h1>
            <hr/>
            <h2 class="hero-sub">Conferência Nossa Senhora Aparecida</h2>
          </header>
          <div class="hero-figures">
            <figure><img src="ssvp_logo.jpg"></figure>
          </div>
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
            <div class="text1-card">
              <header class="text1-card-cabeca">
                <div class="text1-card-detalhes">
                  <span classe="cor-2">Um pouco sobre...</span>
                  <h3>O que é a SSVP?</h3>
                  <p class="cor-branca">A Sociedade São Vicente de Paulo é uma organização católica que se dedica a ajudar
                    os mais necessitados através de caridade e do serviço. Fundado em 18833 por Antônio Frederico
                  Ozam. </p>
                </div>  
              </header>
              <p>outra coisa q n sei oq é vai se fuder</p>
            <div>
                <span>OUTRO DIV MANO Q ISSO</span>
          </div>
      </section>
  </main>

  <footer>
      <p class="text1-title"> TRABALHO FEITO POR: </p>
      <p class="autores"> Daniel Shizuo Moura Makiyama </p>
      <p class="autores"> Fabricio de Souza Gonçalves </p>
  </footer>


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
                  <th scope="col">Cpf</th>
                  <th scope="col">Cep</th>
                  <th scope="col">Media Salárial</th>
                  <th scope="col">Stiuação de moradia</th>
                  <th scope="col">Quantidade de Pessoas na casa</th>
                  <th scope="col">Número de Telefone</th>
                  <th scope="col">Data de Nascimento</th>
                  <th scope="col">Ações</th>
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