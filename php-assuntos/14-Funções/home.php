<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    
    <?php

        // Por algum motivo está com underlines vermelhas de erro, mas o código funciona...

        function dizerOi($nome, $idade){
            echo "Oi $nome! Você tem $idade anos. <br>";
        }

        dizerOi("Ana", 18);
        dizerOi("Lucas", 99);
        dizerOi("Carlos", 43);
    ?>

</body>
</html>