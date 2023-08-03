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


</body>
</html>