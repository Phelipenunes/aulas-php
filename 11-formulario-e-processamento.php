<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário PHP</title>
</head>
<body>
    <h1>Formulários e PHP combinados</h1>
    <hr>
    <?php
    if( isset($_POST["enviar"])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

    
    ?>

    <h2> dados:</h2>
    <p><?=$nome?></p>
    <p><?=$email?></p>

    <?php } else { ?>
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input  required ="email" name="email" id="email">
        </p>
        
        <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
   <?php } ?>
</body>
</html>