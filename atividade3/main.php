<?php
    require_once __DIR__."/backend.php";

    $gerador = new geradorFakeNews();

    $frase = "";
    if(isset($_POST["nome"]) && isset($_POST["nome"][0]) && 
        isset($_POST["mes_de_nascimento"]) && $_POST["mes_de_nascimento"] > 0 && $_POST["mes_de_nascimento"] < 13  
        && isset($_POST["dia_de_nascimento"]) && $_POST["dia_de_nascimento"] > 0 && $_POST["dia_de_nascimento"] < 32){
        $frase = $gerador->criarFrase($_POST["nome"], $_POST["mes_de_nascimento"], $_POST["dia_de_nascimento"]);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Crie uma fake news</h1>
    <form method="POST">

        <div>
            <p>Nome: </p>
            <input type="text" name="nome" minlength="1">
        </div>
        <div>
            <p>Mes de nascimento</p>
            <input type="number" name="mes_de_nascimento" min="1" max="12">
        </div>
        <div>
            <p>Dia de nascimento</p>
            <input type="number" name="dia_de_nascimento" min="1" max="31">
        </div>


        <input type="submit">

    </form>

    <?php
        if($frase){
            echo "<p> Fake news : $frase</p>";
        }
    ?>
</body>

</html>