<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <?php
    $salario = 2000;
    
    if($salario < 1500 ){
        $resultado = $salario * 1.15;
    }elseif($salario <= 3000 ){
        $resultado = $salario * 1.10;
    }elseif ($salario > 3000 ) {
        $resultado = $salario * 1.10;
    } 
    $salario = number_format($salario, 2, ',', '. ');
    $resultado = number_format($resultado, 2, ',', '. ');            
    ?>
    <p>o seu salário é de: <?=$resultado?></p>
</body>
</html>