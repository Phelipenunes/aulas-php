<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-2</title>
    <style>
        ul li{
            list-style: none;
            padding: 5px;
        }
        #a1{
            height:150px;
            width:45%;
            display: flex;
            justify-content: flex-end;
        }
        #a2{
            height:150px;
            width:45%;
        }
        section{
            display: flex;
            justify-content:center;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $informacao = [
        ["Phelipe", "vitor"],
        ["senha1", "senha2"],
        ["phelipe@gmail.com", "vitor@gmail.com"],
        ["masculino"],
        [19,16],
        ["São Paulo"]
    ];
    ?>

    <h1>Dados dos clientes</h1>
    <section>
        <article id="a1">
            <ul>
                <li><?=$informacao[0][0]?></li>
                <li><?=$informacao[2][0]?></li>
                <li><?=$informacao[3][0]?></li>
                <li><?=$informacao[4][0]?></li>
                <li><?=$informacao[5][0]?></li>
            </ul>
        </article>
        <article id="a2">
         <ul>
             <li><?=$informacao[0][1]?></li>
             <li><?=$informacao[2][1]?></li>
             <li><?=$informacao[3][0]?></li>
             <li><?=$informacao[4][1]?></li>
             <li><?=$informacao[5][0]?></li>
         </ul>
        </article>
    </section>
    
</body>
</html>