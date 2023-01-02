<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For</title>
</head>
<body>

    <?php

        // Loop For

        // for($i = 0; $i <= 10; $i++){
        //     echo $i;
        // }

        // Usando o For para mostrar elementos de um array

        $numerosDaSorte = array(2, 3, 7, 11, 17, 33);

        for($i = 0; $i < count($numerosDaSorte); $i++){
            echo "$numerosDaSorte[$i] <br>";
        }
    ?>

</body> 
</html>