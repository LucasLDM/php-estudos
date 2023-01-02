<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>

    <form action="home.php" method="post">

        <!-- Já que vamos aceitar várias checkboxes, o nome (frutas[]) vai servir para representar um array e que vamos armazenar as frutas dentro dele -->

        <label>Maçãs</label>
        <input type="checkbox" name="frutas[]" value="maçãs"><br> 

        <label>Laranjas</label>
        <input type="checkbox" name="frutas[]" value="laranjas"><br>
        
        <label>Pêras</label>
        <input type="checkbox" name="frutas[]" value="pêras"><br>

        <input type="submit" value="vai">
    </form>


    <?php

        // Ao pegar o nome do input, não precisa por [] aqui
        $frutas = $_POST["frutas"];
        //echo $frutas[0]; // Mostra qual a fruta da checkbox na posição 0 marcada (primeira).
        echo $frutas[1]; // Mostra qual a fruta da checkbox na posição 1 marcada (segunda).
        //echo $frutas[2]; // Mostra qual a fruta da checkbox na posição 2 marcada (terceira).

    ?>

</body>
</html>