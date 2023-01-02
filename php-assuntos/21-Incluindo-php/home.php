<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluindo PHP</title>
</head>
<body>
    
    <?php

        // Para funcionar, você precisa por os valores das variáveis ANTES de incluir o arquivo.

        $titulo = "Meu primeiro post";
        $autor = "Lucas";
        $contaPalavras = 400;

        include "artigo-header.php";
        
        // A lógica é a mesma pra arquivos que contém métodos!

    ?>

</body>
</html>