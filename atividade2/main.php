<?php
    require_once __DIR__."/api.php";

    $climaAPI = new climaApi();

    $informacoes = [];
    if(isset($_GET["campo_cidade"])){
        $informacoes = $climaAPI->obter_clima_cidade($_GET["campo_cidade"]);
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
    <h1>Digite o nome da cidade:</h1>
    <form action="main.php" method="GET">

        <input type="text" name="campo_cidade"> <br />
        <input type="submit">

    </form>


    <?php 
        if(count($informacoes)){
            echo "<h1>".$informacoes["nome"]."</h1>";
            echo "<p>temperatura: ".$informacoes["temperatura"]." </p>";
            echo "<p>umidade: ".$informacoes["umidade"]."%"." </p>";
            echo "<p>velocidade do vento: ".$informacoes["velocidade"]." </p>";
            echo "<p>sensação:  ".$informacoes["sensacao"]." </p>";
         
        }
    ?>
    
    

</body>

</html>