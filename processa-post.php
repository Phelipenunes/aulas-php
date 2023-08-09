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
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
    filter_var_array(
    $interesses = $_POST["interesses"] ??[], FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>idade: <?=$idade?></li>

        <?php if(!empty($interesses)){ ?>
        <li>interesses: <?=implode(", ",$interesses)?></li>

        <li>interesses: 
            <ul>
                <?php foreach ( $interesses as $interesses) ?>
                <li><?=$interesses?></li>
                <?php ?>
            </ul>
        </li>

        <?php } ?>

        <?php if(!empty($mensagem)){ ?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php } ?>
    </ul>
    <?php
    }
    ?>
</body>
</html>