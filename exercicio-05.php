<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <style>
     .red{background-color: red;}
     .green{background-color: green;}
    </style>
</head>
<body>
    <h1>Exercício</h1>
    <hr>
    
    <?php
    
    function nota (int $valor1, int $valor2, int $valor3){
        $nota = ($valor1 + $valor2 + $valor3)/3;
        return $nota;  
    };

    function situacao(int $nota){
        if ( $nota >= 7) {
            return  "Aprovado";
        } else {
            return  "Reprovado";
        }
    }    
    ?>
    <p>nota do aluno : <?=nota( 8, 8, 8)?></p>
    <p>O aluno está :  <span class="<?= situacao(8, 8,8) == "Aprovado" ? "green":"red"?>"><?=situacao(8, 8, 8)?> </span></p>
</body>
</html>