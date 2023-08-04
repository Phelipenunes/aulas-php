<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <h1>exemplos de funções nativas </h1>
    <hr>

    <h2>String</h2>
    
    <h3>trim()</h3>
    <?php 
    $nome = "    victor apanhou ontem   ";
    $nomesemespaco = trim($nome);
    ?>
    <pre> <?=var_dump($nome)?></pre>
    <pre> <?=var_dump($nomesemespaco)?></pre>
    <hr>
    
    <h2>numérica</h2>
    <hr>
    <?php ?>
    <h2>Array</h2>
    <hr>
    <?php ?>
    <h2>Filtros</h2>
    <?php ?>
    <hr>
    <h2>Segurança</h2>
    <?php ?>
    <hr>
</body>
</html>