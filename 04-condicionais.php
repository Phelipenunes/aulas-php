<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .red{color: red;}
        .urgente{
            color: red;
            background-color: yellow;
            font-weight:bold ;
        }
        .green{color: green;}
    </style>
</head>
<body>
    <h1>Estruturando condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <hr>

    <?php 
    $numero = 5;
    if($numero > 1){
        echo "<p>$numero é maior que 1</p>";
    }

    if($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>

    <h2>Composta</h2>
    <hr>

    <?php
    $produto = "ultrabook asus";
    $qtdemestoque = 0;
    $qydcritica = 15;

    echo "<h3>$produto</h3>";
    echo "<h4>Quantidade em estoque: $qtdemestoque</h4>";

    if ($qtdemestoque < $qydcritica) {
        echo "<p>É necessário <span class='red'>compra!</span></p>";

        if($qtdemestoque == 0){
            echo "<p><span class='urgente'>Urgente</span> compra!</p>";
        }


    } else {
        echo "<p>Estoque <span class='green'normal</span></p>";
    }
    
    ?>
    <h2>Encadeada</h2>
    <hr>

    <?php   
    $escolha = 1;

    if($escolha == 1 ){
        echo "<p>Ok, vamos fazer o lanche!</p>";
    }elseif($escolha == 2 ){
        echo "<p>Beleza, vamos fazer a pizza!</p>";
    }elseif ($escolha == 3 ) {
        echo "<p>Professor ficou feliz!</p>";
        
    }else{
        echo "<p>não entendi... repita</p>";   
    }    
    ?>

</body>
</html>