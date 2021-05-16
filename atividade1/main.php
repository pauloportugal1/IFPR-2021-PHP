<?php
    require_once __DIR__."/api.php";
    
    $pokemons = receberPokemons();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .card {
            width: 200px;
            height: 400px;
            border: solid 1px #ddd;
            position: relative;
            float: left;
            padding: 10px;
        }

        .card img,
        .card h5 {
            text-align: center;
        }

        img {
            max-width: 100%;
        }
    </style>

    <title>Document</title>
</head>

<body>

    <?php foreach ($pokemons as $pokemon) : ?>
        <div class="card">

            <img src="<?= $pokemon['imagem'] ?>" alt="">
           
            <h5><?= $pokemon['nome'] ?></h5>
            <p>altura: <?= $pokemon['altura'] ?> cm.</p>
            <p>peso: <?= $pokemon['peso'] ?> grs.</p>
            <p>habilidades: </p>

            <ul>
                <?php foreach ($pokemon['habilidades'] as $hab) : ?>
                    <li><?= $hab['ability']['name'] ?></li>
                <?php endforeach; ?>
            </ul>

        </div> 
    <?php endforeach; ?>
</body>

</html>