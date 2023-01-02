<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return</title>
</head>
<body>
    
    <?php

        function cubo($lado){
            return $lado**3;
        }

        $cuboResultado = cubo(3);
        echo $cuboResultado; // 27
        // ou echo cubo(3);

    ?>

</body>
</html>