<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

    <?php

        // Criando um array
        $amigos = array("Ana", "Carlos", "Lola", "Gustavo");

        $amigos[4] = "Rafaela"; // Adicionando um novo elemento na posição 4

        // Você também pode misturar elementos de vários tipos diferentes!
        $produtos = array("Salgadinho", 3.50, "Jujuba", 2.80, "Chocolate em barra", 9.99);

        // echo $produtos[0]; // Mostra o nome do produto pelo índice

        // Array de arrays
        $alunos = array(
            array("Ana", 18),
            array("Lucas", 23),
            array("Lola", 19)
        );

        // echo $alunos[2][0]; // Mostra quem está na posição 2, e dentro dela, a que está na posição 0 --> Lola

        echo count($amigos); // Conta quantos elementos tem o array
        
    ?>

</body>
</html>