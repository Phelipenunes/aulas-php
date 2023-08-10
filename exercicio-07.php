<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<?php
$fabricantes = ["Honda" =>"Honda", "Fiat" => "Fiat", "BMW" => "BMW", "Mercedez" => "Mercedez"];

if(isset($_POST["enviar"])){
    if( empty($_POST["nome"])||empty($_POST["preco"])){
        ?>
        <p><b>Preencha os campos obrigatorio</b></p>";
        <p><a href="exercicio-07.php">voltar</a></p>"; 
        <?php
    } else {
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'preco',FILTER_VALIDATE_FLOAT );
    $disponibilidade = filter_input(INPUT_POST, "disponibilidade",FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, "descricao",FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricantes = filter_input(INPUT_POST, 'fabricantes', FILTER_SANITIZE_SPECIAL_CHARS)
    ?>

    <h2>Dados:</h2>
    <p><?=$nome?></p>
    <p><?=$fabricantes?></p>
    <p><?=$preco?></p>
    <p><?=$disponibilidade?><p>
    <p><?=$descricao?></p>


    <?php
    }}else {
    ?>
    
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input required type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="fabricantes">Fabricante:</label>
            <select name="fabricantes" id="fabricantes">
                <option value=""></option>
                <?php foreach($fabricantes as $key => $marca){ ?>
                <option value="<?=$key?>"><?=$marca?></option>
                <?php } ?>
            </select>
        </p>
        <p>
            <label for="preco">Preço:</label>
            <input required type="number" step="0.01" maxlength="8" name="preco" id="preco" min="100" max="10000">
        </p>
        <p>Disponibilidade <br>
            <input type="radio" name="disponibilidade" id="sim" value="Sim">
            <label for="sim">Sim</label>
            <input type="radio" name="disponibilidade" id="nao" value="Não">
            <label for="nao">Não</label>
        </p>
        <p>
            <label for="descricao">Descrição:</label> <br>
            <textarea name="descricao" id="descricao" cols="30" rows="1"></textarea>
        </p>
        <p>
            <button type="submit"  name="enviar" id="enviar">Enviar</button>
        </p>
    </form>
    <?php } ?>
    
</body>
</html>