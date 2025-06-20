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
                    <input type="text" class="form-control mb-2 mr-sm-2" id="nome" placeholder= "Digite o nome" name="nome" 
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getNome()) : ''; ?>" required>

                    <label for="endereco" class="sr-only">Endereço:</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="endereco" placeholder= "Digite o endereço" name="endereco"
                        value="<?php echo $cliente && $cliente->getEndereco() !== null ? htmlspecialchars($cliente->getEndereco()) : ''; ?>" required>

                    <label for="idade" class="sr-only">Idade:</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="idade" placeholder= "Digite a idade" name="idade"
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getIdade()) : ''; ?>" required>    
                    
                    <label for="cpf" class="sr-only">Cpf:</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="cpf" placeholder= "Digite o CPF" name="cpf"
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getCpf()) : ''; ?>" required>    
                   
                        <label for="media" class="sr-only">Media:</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="media" placeholder= "Digite a média salárial da família" name="media"
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getMedia()) : ''; ?>" required>    
                  
                        <label for="casa" class="sr-only">Casa:</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="casa" placeholder= "Digite se a casa é alugada ou não" name="casa"
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getCasa()) : ''; ?>" required>    
                    
                        <label for="pessoasCasa" class="sr-only">PessoasCasa:</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="pessoasCasa" placeholder= "Digite a quantidade de pessoas na casa" name="pessoasCasa"
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getPessoasCasa()) : ''; ?>" required>    
                    
                        <label for="cep" class="sr-only">Cep:</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="cep" placeholder= "Digite o CEP" name="cep"
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getCep()) : ''; ?>" required>    
                   
                        <label for="numTel" class="sr-only">NumTel:</label>
                    <input type="number" class="form-control mb-2 mr-sm-2" id="numTel" placeholder= "Digite o número de telefone" name="numTel"
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getNumTel()) : ''; ?>" required>    
                   
                        <label for="dataNasc" class="sr-only">dataNasc:</label>
                    <input type="date" class="form-control mb-2 mr-sm-2" id="dataNasc" placeholder= "Digite a data de Nascimento" name="dataNasc"
                        value="<?php echo $cliente ? htmlspecialchars($cliente->getDataNasc()) : ''; ?>" required>    

                    <button type="submit"class="btn btn-primary mb-2">
                        <?php echo $cliente ? 'Salvar' : 'Adicionar'; ?></button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>