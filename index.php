<?php
    $data=[];
    $fichier = fopen("data/movies.csv", "r");
    while($film=fgetcsv($fichier, 1000,';')){
        $data[]=$film;
    }
    fclose($fichier);
    $dataFilm=array_slice($data, 1);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma liste de film</title>
</head>
<body>
    <h1>Voici ma liste de films</h1>
        <?php foreach ($dataFilm as $film): ?>
            <br>
            <h2><?= $film[1]?></h2>
            <span>Réalisateur : <?= $film[2]?></span>
            <br>
            <span>Genre : <?=$film[3]?></span>
            <br>
            <span>Année : <?=$film[5]?></span>
            <p><?= $film[4] ?>
        <?php endforeach ?>
    <br>
    <br>
    <button id="ajout" type="submit">Ajouter un film</button>
</body>
</html>