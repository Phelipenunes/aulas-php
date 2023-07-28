<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Estrutura de controle de repetição</h1>
    <hr>

    <h2>WHILE (enquanto)</h2>
<?php
$i = 1;

while( $i <= 5){
?>
    <p><?=$i?></p>
<?php
    $i++;        
}
?>

    <h2>DO/WHILE (repita/ate)</h2>
<?php
$j = 1;
do{
?>
    <div>
        <h3>Título</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque vero quas veritatis aliquid? Quasi laudantium, qui numquam dolorem cumque quaerat modi deserunt doloremque minima in natus consequatur, dolores autem reprehenderit!8</p>
    </div>
<?php
$j++;
}while($j <= 10);
?>    


    <h2>FOR (para)</h2>
<?php
for( $i = 1; $i <=3; $i++ ){
?>
    <p><code>i</code> vale: <b><?=$i?></b>.</p>
<?php    
}
?>
    
    <hr>
    <h2>Mini-Exercício</h2>
    <ol>
<?php
$mes = array ("Janeiro", "Fevereiro", "Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

$m = 0;
$q = count($mes);
do{
?>
    <li>Estamos no mês de: <?=$mes[$m]?></li> 
<?php
$m++;
}while($m < $q);
?> 
    </ol>   
   <h3>manipulando arrays assosciativos</h3>
<?php
$clubes = [ 
    "Corinthians" => "Timão","Palmeiras" => "Porco","São Paulo" => "Tricolor","Santos" => "Peixe" 
];

foreach ($clubes as $clubes => $apelidos){
?>
<p>O <?=$clubes?> é conhecido como <?=$apelidos?>.</p>
<?php
}
?>
<hr>

<h2>Loops com matriz</h2>
<?php
$planos = [
    ["HTML","CSS","JS"],
    ["react","react native"]
];

for($linha = 0; $linha < count($planos); $linha++){
    for($coluna = 0; $coluna < count($planos[$linha]); $coluna++){
?>
    <p><b><?=$planos[$linha][$coluna]?></b></p>
<?php        
    }
}
?>
<hr>
<?php

foreach($planos as $linha){
    foreach($linha as $coluna){

?>
    <p><i><?=$coluna?></i></p>
<?php
    }
}
?>

<hr>
<h3>Loops com matrizes associativas</h3>
<?php
$clientes = [
    [
        "nome" => "Chaves",
        "idade" => 8
    ],
    [
        "nome" => "Chapolin",
        "idade" => 25
    ],
    [
        "nome" => "Chiquinha",
        "idade" => 10
    ]
    ];

    foreach($clientes as $cliente){
?>
    <p><?=$cliente["nome"]?></p>
    <p><?=$cliente["idade"]?></p>

<?php
}
?>
</body>
</html>