<?php
require_once __DIR__ . '/models/Movie.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi Passi con le Classi</title>
</head>

<body>


    <?php $movie_1 = new Movie(1, 'La vita è bella', 'Drammatico', 1997, '110 min') ?>
    <div class="movie">
        <h1><?= $movie_1->name ?></h1>
        <h2><?= $movie_1->genre ?></h2>
        <p><?= $movie_1->year ?></p>
        <p><?= $movie_1->duration ?></p>
    </div>



</body>

</html>