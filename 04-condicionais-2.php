<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais2</title>
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
    ?>    
        <p><?=$numero?> é maior que 1</p>
    <?php    
    }

    if($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>

    <h2>Composta</h2>
    <hr>

    <?php
    $qtdemestoque = 0;
    $qydcritica = 15;
    ?>
    <h3>notebook</h3>
    <h4>Quantidade em estoque: <?=$qtdemestoque?></h4>
    <?php
    if ($qtdemestoque < $qydcritica) {
    ?>
        <p>É necessário <span class='red'>compra!</span></p>
    <?php
        if($qtdemestoque == 0){
    ?>        
            <p><span class='urgente'>Urgente</span> compra!</p>
    <?php        
        }


    } else {
    ?>    
        <p>Estoque <span class='green'>normal</span></p>
    <?php    
    }
    ?>
    <h2>Encadeada</h2>
    <hr>

    <?php   
    $escolha = 1;

    if($escolha == 1 ){
    ?>
        <p>Ok, vamos fazer o lanche!</p>
    <?php    
    }elseif($escolha == 2 ){
    ?>
        <p>Beleza, vamos fazer a pizza!</p>
    <?php
    }elseif ($escolha == 3 ) {
    ?>
        <p>Professor ficou feliz!</p>
    <?php    
    }else{
    ?>
        <p>não entendi... repita</p>
    <?php       
    }    
    ?>

</body>
</html>