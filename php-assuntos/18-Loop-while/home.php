<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop While</title>
</head>
<body>

    <?php

        // while (checa a condição primeiro)
        $index = 1;

        while($index <= 5){
            echo "$index <br>";
            $index++;
        }

        // do...while (executa pelo menos 1 vez antes de checar a condição)

        $index = 6;

        do{
            echo "$index <br>";
            $index++;
        }
        while($index <= 5)

    ?>

</body> 
</html>