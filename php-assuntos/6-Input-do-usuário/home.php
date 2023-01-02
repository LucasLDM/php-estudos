<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input do usuário</title>
</head>

<!-- Assim como o javascript precisamos criar um formulário com HTML,
    pois é assim que o HTML e o PHP se encontram.
-->

<body>

    <!-- Colocar em "action" o nome do arquivo php que estamos trabalhando -->
    <!-- Em "method" colocamos "get", porque queremos pegar informações -->
    <form action="home.php" method="get">
        <label>Nome</label><br>
        <input type="text" name="nome"><br> <!-- O "name" deve ter um nome único, para que possamos acessá-lo pelo PHP -->
        <label>Idade</label><br>
        <input type="number" name="idade"><br>
        <input type="submit"> <!-- Ao apertar o botão, irá aparecer o nome do usuário logo abaixo (por quê?) -->
    </form>

    <br>

    <?php
        // $_GET[" "] serve para PEGAR uma informação
        echo "Seu nome é " . $_GET["nome"];
        echo("<br>");
        echo "Sua idade é " . $_GET["idade"];
    ?>

</body>
</html>