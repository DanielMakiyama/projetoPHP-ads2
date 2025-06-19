<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSVP</title>
</head>

<body>
    <h1>lista de produtos</h1>
    <ul>
        <?php foreach ($produtos as $produto): ?> 
                <li>
                    ID: <?= $produto->getId(); ?> - Descricao: <?= $produto->getDescricao(); ?>
                                    - Preco: R$ <?= number_format($produto->getPreco(2,',','.')); ?>
                </li>
            <?php endforeach; ?>
    </ul>
</body>

</html>