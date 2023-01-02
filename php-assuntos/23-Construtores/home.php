<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtores</title>
</head>
<body>
    
<?php
        
        class Livro{

            var $titulo;
            var $autor;
            var $numPaginas;

            // Construtores são funções que são chamadas toda vez que criamos um objeto de uma classe.

            function __construct($titulo, $autor, $numPaginas)
            {
                $this -> titulo = $titulo;
                $this -> autor = $autor;
                $this -> numPaginas = $numPaginas;
            }

        }

        /* Para criarmos os livros sem o construtor gastamos muitas linhas de código. Usando o construtor, ele poupa muito trabalho! */

        $livro1 = new Livro("Filhos do Éden", "Eduardo Spohr", 300);
        $livro1->titulo = "Batalha do Apocalipse"; // Alterando o título do livro1
        $livro2 = new Livro("The Witcher - O último desejo", "Andrzej Sapkowski", 350);

        echo $livro1 -> titulo;
    ?>

</body>
</html>