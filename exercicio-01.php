<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <style>
        .cor1{
            color:blue;
         }

         .cor2{
            color:red;
            text-transform: uppercase;
         }
    </style>
</head>
<body>
    <?php
    // $data = "18/07/2023";
    // fuso horario 
    date_default_timezone_set("America/Sao_paulo"); 

    $data = date("d/m/Y");
    $hora = date ("H:i");
    const PESSOA = "Phelipe";
    $curso = "Informática";
    $cargahoraria = 20;
    $faltas = ($cargahoraria/4);
    ?>

    <h1>Informações</h1>
    <p>Meu nome é <span class="cor2"><?=PESSOA?></span>, Faço o curso de <span class="cor2"><?=$curso?></span> em que a carga horária é de <span class="cor1"><?=$cargahoraria?></span> hora(s) e o limite de faltas é de <span class="cor1"><?=$faltas?></span> hora(s)  </p>
    <p><?=$data?></p>
    <p><?=$hora?></p>
    
</body>
</html>