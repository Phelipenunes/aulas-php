<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b></p>
    <?php
    if( empty($_POST["nome"])||empty($_POST["email"])){
        ?>
        <p><b>Preencha os campos obrigatorio</b></p>";
        <p><a href="10-formulario.html">voltar</a></p>"; 
        <?php
    } else {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $interesses = $_POST["interesses"] ??;
    $idade = $_POST["idade"]
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>idade: <?=$idade?></li>
        <li>iteresses: <?=implode(", ",$interesses)?></li>
        <?php if(!empty($mensagem)){ ?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php } ?>
    </ul>
    <?php
    }
    ?>
</body>
</html>