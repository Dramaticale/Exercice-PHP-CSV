<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="postAjoutFilm.php" method="POST">
        <h1>Ajouter un film à ma collection</h1>
        <label for="num_id">Numero identifiant :</label>
        <input id="num_id" name="num_id" type="text" >
        <br>
        <br>
        <label for="titre">Titre :</label>      
        <input id="titre" name="titre" type="text" >
        <br>
        <br>
        <label for="real">Réalisateur :</label>      
        <input id="real" name="real" type="text" >
        <br>
        <br>
        <label for="sport">Action :</label>
        <input type="checkbox" name="genre[]" value="action">
        <label for="film">Aventure :</label>
        <input type="checkbox" name="genre[]" value="aventure">
        <label for="">Drame :</label>
        <input type="checkbox" name="genre[]" value="drame">
        <label for="sport">Horreur :</label>
        <input type="checkbox" name="genre[]" value="horreur">
        <label for="film">Science-fiction :</label>
        <input type="checkbox" name="genre[]" value="science-fiction">
        <label for="">Thriller :</label>
        <input type="checkbox" name="genre[]" value="thriller">
        <br>
        <br>
        <label for="resume">Résumé :</label>
        <br>
        <textarea name="resume" id="resume" cols="50" rows="5" placeholder="Résumé du film...."></textarea>
        <br>
        <br>
        <label for="annee">Année :</label>
        <input type="text" id="annee" name="date">
        <br>
        <br>
        <button id="ajout" type="submit">Ajouter</button>
    </form>
</body>
</html>