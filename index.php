<?php
require_once __DIR__ . '/models/Movie.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Primi Passi con le Classi</title>
</head>

<body class="bg-secondary">


    <?php $movie_1 = new Movie(1, 'La vita è bella', 'Drammatico', 1997, '110 min') ?>
    <div class="text-warning text-center">
        <h1>Titolo: <?= $movie_1->name ?></h1>
        <h2>Genere: <?= $movie_1->genre ?></h2>
        <p>Anno: <?= $movie_1->year ?></p>
        <p>Durata: <?= $movie_1->duration ?></p>
        <caption>ID: <?= $movie_1->get_id() ?></caption>
        <p class="font-italic"><?= $movie_1->get_difference() ?></p>
    </div>
    <hr />
    <?php $movie_2 = new Movie(2, 'Una settimana da Dio', 'Commedia', 2003, '102 minuti') ?>
    <div class="text-warning text-center">
        <h1>Titolo: <?= $movie_2->name ?></h1>
        <h2>Genere: <?= $movie_2->genre ?></h2>
        <p>Anno: <?= $movie_2->year ?></p>
        <p>Durata: <?= $movie_2->duration ?></p>
        <caption>ID: <?= $movie_2->get_id() ?></caption>
        <p class="font-italic"><?= $movie_2->get_difference() ?></p>
    </div>
    <hr />



</body>

</html>