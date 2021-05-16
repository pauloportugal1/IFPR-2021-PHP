<?php
    require_once __DIR__."/backend.php";
    $safadeza = null;

    if(isset($_POST["mes"]) && isset($_POST["dia"]) && isset($_POST["ano"])){
        $safadeza = safadao($_POST["dia"], $_POST["mes"], $_POST["ano"]);
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
            <p>Dia de nascimento</p>
            <input type="number" name="dia" min="1" max="31">
        </div>
        <div>
            <p>Mes de nascimento</p>
            <input type="number" name="mes" min="1" max="12">
        </div>
        <div>
            <p>Ano de nascimento</p>
            <input type="number" name="ano" min="1">
        </div>


        <input type="submit">

    </form>

    <?php
        if(!is_null($safadeza)){
            echo "<p> Você é ". ($safadeza >= 0 ? $safadeza : $safadeza * -1). "% ". ($safadeza >= 0 ? "Safado" : "Anjo") . "</p>";
        }
    ?>
</body>

</html>