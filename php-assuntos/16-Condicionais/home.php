<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    
    <?php

        function pegaMaximo($num1, $num2){

            if($num1 > $num2){ return $num1; }
            else{ return $num2; }

        }

        // Operadores Lógicos: && || !

        $mulher = true;
        $alta = false;

        if($mulher && $alta){
            echo "Você é uma mulher alta.";
        }
        elseif($mulher && !$alta){
            echo "Você é uma mulher baixa.";
        }
        elseif(!$mulher && $alta){
            echo "Você não é mulher mas é alto.";
        }
        else{
            echo "Você não é mulher e não é alto.";
        }

        echo pegaMaximo(33,9);

    ?>

</body>
</html>