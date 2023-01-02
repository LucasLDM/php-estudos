<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções do Objeto</title>
</head>
<body>
    
    <?php

        class Estudante{

            var $nome;
            var $curso;
            var $media;

            function __construct($nome, $curso, $media)
            {
                $this -> nome = $nome;
                $this -> curso = $curso;
                $this -> media = $media;
            }

            function estaAprovado(){

                if($this->media >= 7){
                    return "Aprovado";
                }
                return "Reprovado";
            }

        }

        $estudante1 = new Estudante("Lucas", "ADS", 4.8);
        $estudante2 = new Estudante("Ana", "Arte", 8.6);

        echo $estudante2->estaAprovado();
    ?>

</body>
</html>