<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parâmetros URL</title>
</head>
<body>
    
    <!-- Parâmtros URL ou variáveis URL são as variáveis e seus valores
         que aparecem na URL da página. Isso acontece quando usamos o $_GET 
    -->

    <form action="home.php" method="get">
        <label>Nome</label><br>
        <input type="text" name="nome">
        <input type="submit">
    </form>
    <br>

    <?php
        echo $_GET["nome"];
        echo $_GET["idade"]; // variável criada na própria URL (&idade=18) e mostrada com o "echo". Note que não precisei criar mais um input!

        // Claro que por mais que isso seja útil em algum site que tenha várias páginas, já que é fácil de se situar e modificar o valor da variável da página na URL para avançar para uma página específica, isso não é seguro caso você tenha que guardar informações dos clientes. 

        // O próximo método que vamos estudar, o POST, faz isso de forma mais segura.
    ?>

</body>
</html>