<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    
    <?php

        class Chefe{

            function fazerGalinha(){
                echo "O chefe está fazendo galinha! <br>";
            }

            function fazerSalada(){
                echo "O chefe está fazendo salada! <br>";
            }

            function fazerPratoEspecial(){
                echo "O chefe está fazendo bife à parmegiana! <br>";
            }
        }

        // Agora o chefe italiano tem todos os métodos da superclasse "Chefe"!
        class ChefeItaliano extends Chefe{

            // Método exclusivo da classe ChefeItaliano.
            function fazerPizza(){
                echo "O chefe está fazendo pizza!";
            }

            // Sobrescrevendo o método da superclasse (é o mesmo que por um @Override aqui em cima)
            function fazerPratoEspecial(){
                echo "O chefe está fazendo lasanha!";
            }
        }

        $chefe = new Chefe();
        echo $chefe->fazerPratoEspecial();

        $chefeItaliano = new ChefeItaliano();
        echo $chefeItaliano->fazerPratoEspecial();

    ?>

</body>
</html>