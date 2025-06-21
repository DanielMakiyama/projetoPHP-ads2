<!-- view/cliente_form.php --> 
<?php
$cliente = isset($_REQUEST['cliente']) ? $_REQUEST['cliente'] : null;
?>
<!DOCTYPE html>
<html>

<head>
    <style>
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Implementando MVC</title>
</head>

<body>

    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-10">


                <h1><?php echo $cliente ? 'Editar Assistido' : 'Adicionar Assistido'; ?></h1><br><br>
                <form class="form-inline" action="index.php?action=<?php echo $cliente ? 'editar' : 'criar'; ?>" method="post">
                    <?php if ($cliente): ?>
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($cliente->getId()); ?>">
                    <?php endif; ?>
                    
                    <label for="nome" class="sr-only">Nome:</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="nome" placeholder= "Digite o nome..." name="nome" 
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getNome()) : ''; ?>" required>

                    <label for="endereco" class="sr-only">Endereço:</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="endereco" placeholder= "Digite o endereço..." name="endereco"
                      value="<?php echo $cliente && $cliente->getEndereco() !== null ? htmlspecialchars($cliente->getEndereco()) : ''; ?>" required>

                    <label for="idade" class="sr-only">Idade:</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="idade" placeholder= "Digite a idade..." name="idade"
                            value="<?php echo $cliente ? htmlspecialchars($cliente->getIdade()) : ''; ?>" required>    

                    <label for="cpf" class="sr-only">Cpf:</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="cpf" placeholder= "Digite o CPF..." name="cpf"
                            value="<?= htmlspecialchars($cliente->cpf ?? '') ?>" required>   

                    <label for="cep" class="sr-only">Cep:</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="cep" placeholder= "Digite o CEP..." name="cep"
                            value="<?= htmlspecialchars($cliente->cep ?? '') ?>" required>   

                    <label for="mediaSal" class="sr-only">Média Salarial:</label>
                    <select class="form-control mb-2 mr-sm-2" id="mediaSal" name="mediaSal" required>
                        <option value="">Selecione a faixa salarial</option>
                        <option value="0-500" <?= ($cliente && $cliente->getMediaSal() === "0-500") ? 'selected' : '' ?>>Até R$500</option>
                        <option value="501-1000" <?= ($cliente && $cliente->getMediaSal() == "501-1000") ? 'selected' : '' ?>>R$501 a R$1.000</option>
                        <option value="1001-2000" <?= ($cliente && $cliente->getMediaSal() == "1001-2000") ? 'selected' : '' ?>>R$1.001 a R$2.000</option>
                        <option value="2001+" <?= ($cliente && $cliente->getMediaSal() == "2001+") ? 'selected' : '' ?>>Acima de R$2.000</option>
                    </select>

                    <label for="casa" class="sr-only">Situação de moradia</label>
                    <select class="form-control mb-2 mr-sm-2" id="casa" name="casa" required>
                        <option value="">Selecione a situação atual da casa</option>
                        <option value="Situação 1" <?= ($cliente && $cliente->getCasa() === "Situação") ? 'selected' : '' ?>>Situação 1</option>
                        <option value="Situação 2" <?= ($cliente && $cliente->getCasa() == "Situação") ? 'selected' : '' ?>>Situação 2</option>
                        <option value="Situação 3" <?= ($cliente && $cliente->getCasa() == "Situação") ? 'selected' : '' ?>>Situação 3</option>
                        <option value="Situação 4" <?= ($cliente && $cliente->getCasa() == "Situação") ? 'selected' : '' ?>>Situação 4</option>
                    </select>

                  

                            
                    <button type="submit"class="btn btn-primary mb-2">
                        <?php echo $cliente ? 'Salvar' : 'Adicionar'; ?></button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>