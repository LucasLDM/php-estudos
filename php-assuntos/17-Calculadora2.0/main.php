<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora 2.0</title>
</head>
<body>
    
    <form action="main.php" method="post">
        
        <label>Primeiro número</label>
        <input type="number" name="pNumero"><br>
        <br>

        <label>Operação</label><br>
        <input type="text" name="operacao"><br>
        <br>

        <label>Segundo número</label>
        <input type="number" name="sNumero"><br>

        <input type="submit">
    </form>

    <?php

        $num1 = $_POST["pNumero"];
        $operacao = $_POST["operacao"];
        $num2 = $_POST["sNumero"];

        switch($operacao){
            case "+":
                echo "Resultado da soma: " . $num1+$num2;
                break;

            case "-":
                echo "Resultado da subtração: " . $num1-$num2;
                break;
            
            case "*":
                echo "Resultado da multiplicação: " . $num1*$num2; 
                break;
            
            case "/":
                echo "Resultado da divisão: " . $num1/$num2;
                break;
            default:
                echo "Operador inválido!";
        }

    ?>

</body> 
</html>