<!-- view/cliente_view.php -->
<?php
$clientes = $_REQUEST['clientes'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Tela 1</title>
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
          <span class="cor-azul">receitas</span>
          <h2 class="text1-title">textinhos textinhos></h2>
          <p class="text1-subtitle">textinhos textinhos</p>
          <div>
            <div>
              <header>
                <div>
                  <span>um texto que fica aqui mais ou menos</span>
                  <h3>titulozinho</h3>
                  <p>sei la o que é isso mano vsf</p>
                </div>  
              </header>
              <p>outra coisa q n sei oq é vai se fuder</p>
            <div>
                <img src="assets/nssSenhora.jpg"></img>
                <span>OUTRO DIV MANO Q ISSO</span>
          </div>
      </section>
  </main>

  <footer>
      <p> TRABALHO FEITO POR: </p>
      <p> Daniel Shizuo Moura Makiyama </p>
      <p> Fabricio Gonçalves </p>
  </footer>

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