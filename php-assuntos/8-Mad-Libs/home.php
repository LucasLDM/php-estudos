<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs!</title>
</head>
<body>

    <form action="home.php" method="get">

    <h1>Meu amigo famoso</h1>

        <p>Hoje é <input type="text" placeholder="Dia da semana" name="diaDaSemana"> e estou muito <input type="text" placeholder="Sentimento" name="sentimento"></p>

        <p>Na verdade, eu gostaria que fosse <input type="text" placeholder="Dia da semana especial" name="diaDaSemanaEspecial"> para que eu pudesse <input type="text" placeholder="Verbo" name="verbo1"> e <input type="text" placeholder="Verbo" name="verbo2"></p>

        <p>Tenho um amigo famoso, o <input type="text" placeholder="Adj. no diminutivo" name="adjNoDiminutivo"> e nós sempre vamos ao <input type="text" placeholder="Local" name="local"></p>

        <p>Quando estamos lá, nós gostamos de <input type="text" placeholder="Verbo" name="verbo3"> no <input type="text" placeholder="Subst. comum" name="substComum"></p>

        <input type="submit">
    </form>
    
    <h2>Sua versão</h2>

    <?php

        $diaDaSemana = $_GET["diaDaSemana"];
        $sentimento = $_GET["sentimento"];

        $diaDaSemanaEspecial = $_GET["diaDaSemanaEspecial"];
        $verbo1 = $_GET["verbo1"];
        $verbo2 = $_GET["verbo2"];

        $adjNoDiminutivo = $_GET["adjNoDiminutivo"];
        $local = $_GET["local"];

        $verbo3 = $_GET["verbo3"];
        $substComum = $_GET["substComum"];

        echo("<strong>Meu amigo famoso</strong> <br>");
        echo("Hoje é $diaDaSemana e estou muito $sentimento. <br>");
        echo("Na verdade, eu gostaria que fosse $diaDaSemanaEspecial para que eu pudesse $verbo1 e $verbo2. <br>");
        echo("Tenho um amiga famosa, a $adjNoDiminutivo e nós sempre vamos ao $local. <br>");
        echo("Quando estamos lá, nós gostamos de $verbo3 no $substComum.");

    ?>

</body>
</html>