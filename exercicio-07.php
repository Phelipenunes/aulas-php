<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        .preto{background-color: black;}
        body{
            margin-left:20%;
            margin-right:20%;
            margin-top: 300px;
            background-color:lightslategray;
        }
        #dados{
            background-color:aliceblue;
            height:40% ;
            border-radius:20px;
            border:solid black;
            padding: 20px ;
            font-family:Chalkduster, fantasy;
        }
        #form{
            background-color:aliceblue;
            height:40% ;
            border-radius:20px;
            border:solid black;
        }

        form{
            padding: 20px;
            font-size: large;
            font-family:Chalkduster, fantasy;
        }
        input,select,textarea{  
            border:solid black;
            border-radius: 5px;
        }
        
        button{
            border:solid black;
            border-radius: 5px;
            width: 7%; 
            font-family:Chalkduster, fantasy ;
            font-size: large;
        }
        .tamanho{
            max-width: 35%;
        }
        .caixaalta{
            text-transform: uppercase;
        }
    </style>
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
    $precovalidado = filter_var($preco,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION );
    $disponibilidade = filter_input(INPUT_POST, "disponibilidade",FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, "descricao",FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricantes = filter_input(INPUT_POST, 'fabricantes', FILTER_SANITIZE_SPECIAL_CHARS)
    ?>
    <div id="dados">
    <p class="caixaalta">Informações:</p>
    <p><?=$nome?></p>
    <p><?=$fabricantes?></p>
    <p><?=$precovalidado?></p>
    <p><?=$disponibilidade?><p>
    <p><?=$descricao?></p>
    </div>    

    <?php
    }}else {
    ?>
    <div id="form">
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
            <label  for="sim">Sim</label>
            <input type="radio" name="disponibilidade" id="nao" value="Não">
            <label for="nao">Não</label>
        </p>
        <p>
            <label for="descricao">Descrição:</label> <br>
            <textarea class="tamanho" name="descricao" id="descricao" cols="30" rows="3"></textarea>
        </p>
        <p>
            <button type="submit"  name="enviar" id="enviar">Enviar</button>
        </p>
    </form>
    </div>
    <?php } ?>
    
</body>
</html>