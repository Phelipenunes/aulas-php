<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <style>
        .red {
            background-color: red;
            width:80px;
        }

        .green {
            background-color: green;
            width:80px;
        }
    </style>
</head>

<body>
    <h1>Exercício</h1>
    <hr>
    <?php
    $alunos = [
        [
            "nome" => "Phelipe", "nota1" => 8, "nota2" => 10, "nota3" => 6
        ],
        [
            "nome" => "Victor", "nota1" => 8, "nota2" => 7, "nota3" => 6
        ],
        [
            "nome" => "André", "nota1" => 7, "nota2" => 10, "nota3" => 2
        ],
        [
            "nome" => "Felipe", "nota1" => 8, "nota2" => 5, "nota3" => 6
        ],
        [
            "nome" => "Eliel", "nota1" => 3, "nota2" => 6, "nota3" => 7
        ],

    ];
    ?>

    <?php

    function nota(float $valor1, float $valor2, float $valor3)  {
        $nota = ($valor1 + $valor2 + $valor3) / 3;
        return $nota;
    };

    function situacao(float $nota)  {
        if ($nota >= 7) {
            return  "Aprovado";
        } else {
            return  "Reprovado";
        }
    }
    foreach ($alunos as $aluno) {
        $media = nota($aluno["nota1"], $aluno["nota2"], $aluno["nota3"]);
    ?>
        <p><?= $aluno["nome"] ?> : <?=$media?> </p>

        <p class="<?= situacao($media) == "Aprovado" ? "green" : "red" ?>"><?= situacao($aluno["nota1"], $aluno["nota2"], $aluno["nota3"]) ?></p>

    <?php
    }
    ?>
</body>

</html>