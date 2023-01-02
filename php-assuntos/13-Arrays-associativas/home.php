<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays associativas</title>
</head>
<body>



    <form action="home.php" method="post">
        <input type="text" name="nome" placeholder="Insira o nome do aluno(a)">
        <input type="submit">
    </form>
    <br>

    
    <?php

        // Arrays associativas nos permite mapear algo através da chave(key) e valor(value). Assim como o hashmap no Java! Tenha certeza que as chaves sejam ÚNICAS!!

        $notas = array(
            "Lucas" => "B+",  // Chave = Lucas / Valor = B+
            "Ana" => "B-",    // Chave = Ana / Valor = B-
            "Carlos" => "A+"  // Carlos = Oscar / Valor = A+
        );

        // Se eu quiser saber a nota de um aluno através do nome(CHAVE):

        $nomeAluno = $_POST["nome"];
        
        echo "A nota de $nomeAluno é: " . $notas[$nomeAluno];


        /* Também poderia fazer assim:
        
        echo $notas[$_POST["nome"]];
        */


        /* Arrays multidimesionais */
        $numeros = array(
            "Pares" => array(2, 4, 6, 8, 10),
            "Ímpares" => array(1,3,5,7,9)
        );

        echo $numeros["Pares"][0];

    ?>

</body>
</html>