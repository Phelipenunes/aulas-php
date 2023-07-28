<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        ul li:nth-child(odd){color:blue;}
        ul li:nth-child(even){color:red;}
    </style>
</head>
<body>
    <h1>Trabalhando com arrays<br> (vetores e matrizes).</h1>
    <hr>
    <h2>Arrays com índices numéricos</h2>

    <?php
    //Sintaxe com colchetes
    $bandas = ["Savatge", "Node", "Rush"];

    // Sintaxe com função array()
    $cursos = array("HTML", "Node", "PHP");

    // Sintaxe de atribuição manual
    $buteco[0] = "Bolinho de bacalhau";
    $buteco[1] = "pastel";
    $buteco[2] = "Esfiha";

    //Constantes de array (PHP 7+)
    define("UNIDADES", ["Penha", "carrão"]);
    const FRUTAS = ["Morango", "Abacaxi"];
    ?>

    <h3>Acessando dados </h3>
    <ol>
        <li>Bandas que mais gosto : <?=$bandas[2]?></li>
        <li>Curso básico de : <?=$cursos[1]?></li>
        <li>Quero comer : <?=$buteco[1]?></li>
        <li>Estamos no Senac : <?=UNIDADES[0]?></li>
        <li>Frutas boa para caipirinha : <?=FRUTAS[0]?></li>
    </ol>
    <hr>
    <h2>Array associativo</h2>
    <?php
    $curso = [
        //Chave associativa:
        // identificador => valor
        "titulo" => "Gastronomia",
        "cargahoraria" => 150,
        "descritivo" => "Aprenda a ferver água"
    ];
    ?>

    <h3>Acessando os dados (Arrays associativo)</h3>
    <p>Nome do Curso: <?=$curso["titulo"]?></p>
    <p>Carga horária:<?=$curso["cargahoraria"]?> horas.</p>
    <p>Descritivo: <?=$curso["descritivo"]?></p>

    <hr>

    <h2>Matriz (array dentro de array)</h2>
    <?php
    $planodeestudos = [
        ["JS", "Node", "React"],
        ["PHP", "POO", "MySQL"],
        ["Teoria das cores", "Photoshop"]
    ];
    ?>

    <h3>Matriz (array dentro de array)</h3>
    <ul>
        <li><?=$planodeestudos[0][2]?></li>
        <li><?=$planodeestudos[1][2]?></li>
        <li><?=$planodeestudos[2][0]?></li>
        <li><?=$planodeestudos[2][1]?></li>        
    </ul>

    <h2>Funçoes de análise de estruturas de dados (debug/depuração)</h2>

    <h3>print_r()</h3>
    <pre>
    <?=print_r($bandas)?>
    </pre>
    <pre>
    <h3>var_dump()</h3>
    <?=var_dump($bandas)?>
    </pre>

</body>
</html>
