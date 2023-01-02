<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header do Artigo</title>
</head>
<body>
    
    <h2>
        <?php
            echo $titulo;
        ?>
    </h2>

    <h4>
        <?php
            echo $autor;
        ?>
    </h4>

    Contagem de palavras: <?php echo $contaPalavras; ?>

</body>
</html>