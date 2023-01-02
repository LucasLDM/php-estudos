<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Números</title>
</head>
<body>
    
    <?php

    /*
        Operadores: + - * / %
    */

        /* Funções matemáticas */

        echo sqrt(4); // Raiz quadrada
        echo("<br>");
        echo abs(-100); // Número absoluto (positivo)
        echo("<br>");
        echo pow(2, 4); // Potenciação (2 elevado a 4)
        echo("<br>");
        echo max(2,4,11); // Mostra qual o maior número
        echo("<br>");
        echo min(2,4,11); // Mostra o menor número
        echo("<br>");
        echo round(3.3); // Arredonda pra parte inteira (para baixo)
        echo("<br>");
        echo ceil(3.2); // Arredonda para cima (4)
        echo("<br>");
        echo floor(3.2); // Arredonda pra baixo (3)
        echo("<br>");
        echo sin(deg2rad(60)); // Mostra o seno do ângulo (precisa converter de degraus para radianos e depois chamar a função sin() )

    ?>

</body>
</html>