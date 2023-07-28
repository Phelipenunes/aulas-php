<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <style>
        table,td,th{
            border: solid 1px black;
            border-collapse:collapse;
        }
        table{
            color:black;
            margin:auto;
            width: 20%;
            height: 200px;
        }
        tr:nth-child(odd){background-color:gray}
        tr:nth-child(even){background-color:lightskyblue;}
        tr:hover{background-color:white;}
    </style>
</head>
<body>
    <table>
        <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
        </tr>
<?php
$curso = [
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "comportamentos",
    "PHP" => "Back-end",
    "SQL" => "manipulação de dados",
    "Java" => "softwares"
];
    $i = 0;
foreach($curso as $cursos => $descricao ){
    $i++
?>
    <tr>
        <td><?=$i?></td>
        <td><?=$cursos?></td>
        <td><?=$descricao?></td>
    </tr>
<?php
}
?>    
</table>
</body>
</html>