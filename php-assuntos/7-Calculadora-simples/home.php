<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>

    <form action="home.php" method="get">

        <label>Primeiro número</label><br>
        <input type="number" name="num1"><br>

        <label>Segundo número</label><br>
        <input type="number" name="num2"><br>
        
        <input type="submit">

    </form>

    
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $somar = $num1 + $num2;

        echo("A soma entre $num1 e $num2 é $somar.");

        // Perceba que na URL aparece o nome das variáveis e seus valores. Você também pode editar os valores na URL sem usar o input!
    ?>

</body>
</html>