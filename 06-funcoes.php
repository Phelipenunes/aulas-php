<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>
    <h2>Funções como procedimento ou sub-rotina</h2>
    <?php
    function dadosautor(){
        echo"<div>";
        echo"<p>Phelipe nunes</p>";
        echo"<p><a href=''>phelipesenac@gamil.com</a></p>";
        echo"</div>";
    }
    ?>
    <section>
        <h3>Chamada de sub-rotina/procedimento</h3>
        <?=dadosautor()?>
        <article>
            <h4>Outra chamada</h4>
            <?=dadosautor()?>
        </article>
    </section>

    <hr>
    <h2>Funções com retorno de dados </h2>
    <?php
    function dadoscurso(){
        return "<b>Técnico em informatica para internet</b>";
    }
    ?>
    <p> estamos no curso de <?=dadoscurso()?>.</p>
    <p><?=dadoscurso()?> é ministrado no senac penha.</p>

    <hr>
    <h3>Funções com parametro (ou argumentos)</h3>
    <?php
    function soma($valor1, $valor2, $valor3){
        $total = $valor1 + $valor2 + $valor3;
        return $total;
    }
    ?>
    <p>resultado 1: <?= soma( 10, 20, 5)?></p>
    <p>resultado 2: <?= soma( 23, 22, 50)?></p>
    <?php
    $resultado3 = soma(500, 580, 500);
    ?>
    <p> Resultado 3:<?=$resultado3?></p>
    <?php if($resultado3 > 100 ){?>
        <p>Está demitido!</p>
    <?php
    }   
    ?>
    <?php if( soma(2, 1, 5) <= 10){?>
        <p> Está reprovado!</p>
    <?php } ?>

    <?php 
    function saudacao($mensagem, $pessoa = "fulano(a)"){
    return "Olá, $mensagem $pessoa ";
    }
    ?>
        <p> <?=saudacao("bom dia","Phelipe")?></p>
        <p> <?=saudacao("bom dia","Vitor")?></p>
        <p> <?=saudacao("bom dia")?></p>





</body>
</html>