<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe geral PHP</title>
    <style>
        p{ font-family:"verdana";}
        .destaque{text-transform: uppercase;}
    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>

    <?php
    // Geração de texto(string)
    echo "<p class='destaque'>Hoje tem corinthians!</p>";

    echo "<p>Hoje tem <span class='destaque'> corinthians</span>!</p>";


    // Geração de texto estruturado(com tags, atributos.)
    echo "<h2>Gerando HTML através do PHP</h2>";

    // CSS inline
    echo "<p style=\"color:red\" >Gerando CSS através do PHP</p>";
    echo "<p style='color:orange'>Gerando CSS através do PHP</p>";
    echo '<p style="color:pink">Gerando CSS através do PHP</p>';

    // CSS classes

    ?>
    <script>
     let destaque = document.querySelector(".destaque");
     console.log(destaque);   
    </script>

</body>
</html>