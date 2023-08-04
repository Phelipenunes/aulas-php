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

    <h3>str_replace</h3>
    <?php
    $frasefeia = "<p>Fulano é um fdp</p>";
    $frasebonita = str_replace (["fdp"],"xxxx",$frasefeia);
    ?>
    <p><?=$frasebonita?></p>
    <p><?=$frasefeia?></p>

    <h3>explode()</h3>
    <?php
    $linguagens = "HTML - CSS - JS - PHP";
    $arraylinguagens = explode(" - ", $linguagens);
    ?>
    <pre> <?=var_dump($linguagens)?></pre>
    <pre> <?=var_dump($arraylinguagens)?></pre>

    <hr>
    <h2>numérica</h2>
    <h3>min, max</h3>
    <?php
    $valores = [10, 5, 50, 1000, 275];
    $valorqualquer = 1259.75;
    ?>
    <p>Menor valor: <?=min($valores)?></p>
    <p>Maior valor: <?=max($valores)?></p>
    <p>Arredondamento: <?=round($valorqualquer)?></p>
    
    <hr>

    <?php ?>
    <h2>Array</h2>
    <h3>inplode()</h3>
    <?php
    $frutas = ["banana","morango","uva"];
    $textofruta = implode(" - ",$frutas);
    ?>
    <pre> <?=var_dump($frutas)?></pre>
    <pre> <?=var_dump($textofruta)?></pre>
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