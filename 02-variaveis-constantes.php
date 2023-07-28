<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <?php
    // variaveis
    // string
    $curso = "Informática";
    $ano = 2013;
    $preco = 2500.25;

    echo "<h2>Saída de dados usando echo na sintaxe completa</h2>";

    echo $curso;
    echo "<p>$curso</p>";
    echo "<p>".$curso."</p>";

    echo "<p> ano letivo: $ano</p>";
    echo "<p><b>Preço</b>: $preco</p>";
    ?>
    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p><?php echo $curso ?></p>
    <p><?=$curso?></p>

    <p>Estamos fazendo o curso de <?=$curso?> no ano de <?=$ano?>. </p>

    <?php
        // constante
        // 1ª forma; usando a palavra-chave const
        define("MEU_NOME","Phelipe");

        // 2ª forma; usando a palavra-chave const
        const UNIDADE = "Penha";
        
        // saída de dados constantes
        echo MEU_NOME;
        echo "<p><b>".MEU_NOME."</b></p>";
    ?>

    <!-- Saída simplificada -->

    <p>Me chamo <b><?=MEU_NOME?></b> e estou no senac <?=UNIDADE?></p>
</body>
</html>