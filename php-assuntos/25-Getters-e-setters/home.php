<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters e Setters</title>
</head>
<body>

    <?php

        // Quero que o título do filme esteja visível para o público mas não a classificação indicativa (para que não possam alterar)

        class Filme{

            public $titulo;
            private $classIndicativa;

            function __construct($titulo, $classIndicativa)
            {
                $this -> titulo = $titulo; // Pode alterar sem problemas
                $this -> setClassIndicativa($classIndicativa); // Só altera se passar pelas condições
            }

            // Agora consigo encapsular de forma segura
            function getClassIndicativa(){

                return $this->classIndicativa;
            }

            // Caso queira alterar algo (deve estar dentro dos valores válidos)
            function setClassIndicativa($classIndicativa){
                
                if($classIndicativa == 10 || $classIndicativa == 12 || $classIndicativa == 14 || $classIndicativa == 16 || $classIndicativa == 18){

                    $this->classIndicativa = $classIndicativa;
                }
                else{
                    $this->classIndicativa = "Classificação indicativa inválida!";
                }

            }

        }

        $ghibli = new Filme("As memórias de Marnie", 10);

        // Alterando a classificação indicativa
        $ghibli->setClassIndicativa(12);

        // Para saber a classificação indicativa
        echo $ghibli->getClassIndicativa();

    ?>

</body>
</html>