<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    
    <?php
        
        class Livro{

            // Atributos
            var $titulo;
            var $autor;
            var $numPaginas;

        }

        // Criando um novo livro e armazenando dentro desta variável
        $livro1 = new Livro();

        // Dando valores ao livro
        $livro1 -> titulo = "Filhos do Éden";
        $livro1 -> autor = "Eduardo Spohr";
        $livro1 -> numPaginas = 300;

        // Mostra o título
        echo $livro1 -> titulo;

        // Para mostrar todas as informações
        // print_r($livro1);

        echo "<br>";

        // Criando outro livro
        $livro2 = new Livro();
        $livro2 -> titulo = "The Witcher - O último desejo";
        $livro2 -> autor = "Andrzej Sapkowski";
        $livro2 -> numPaginas = 350;

        echo $livro2 -> autor;

    ?>

</body>
</html>