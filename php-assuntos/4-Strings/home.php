<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    
    <?php
        $texto = "Sic Parvis Magna";


        echo strtolower($texto); // Texto em minúsculas
        echo("<br>");
        echo strtoupper($texto); // Texto em maiúsculas
        echo("<br>");
        echo strlen($texto); // Comprimento (length) da string
        echo("<br>");
        echo $texto[0]; // Mostra a letra no índice fornecido
        echo("<br>");

        $texto[11] = "B"; // Trocando uma letra por outra usando o índice
        echo $texto[11];

        echo("<hr>");

        $texto = "Kung Fu Mantis";
        echo str_replace("Mantis", "Panda", $texto); // Ordem: Nome antigo, Nome novo, nome da variável
        echo("<br>");
        echo substr($texto, 8); // Pega uma parte de uma determinada string. Ordem: Nome da variável, índice de começo de corte, quantas letras quer recortar (opcional)
        echo("<br>");
        echo substr($texto, 8, 3); // O "3" é opcional
        print_r (explode(" ", $texto)); // Separando cada palavra em um índice num array por meio dos espaços

    ?>

</body>
</html>