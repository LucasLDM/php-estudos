<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST vs GET</title>
</head>
<body>
    
    <!-- <h2>Forma <span style="color: red;">ERRADA</span>!</h2>
    <form action="home.php" method="get">
        <label>Senha</label><br>
        <input type="password" name="senha"><br>
        <input type="submit">
    </form>
    <br><br> 

    No php digitaria echo $_GET["senha"];
    -->

    <h2>Forma <span style="color: green;">CORRETA</span>!</h2>
    <form action="home.php" method="post">
        <label>Senha Segura</label><br>
        <input type="password" name="senhaSegura"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        echo $_POST["senhaSegura"]; // Eu pedi pra mostrar a senha apenas no documento, mas na URL não aparece!
    ?>

</body>
</html>