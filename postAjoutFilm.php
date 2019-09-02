<?php
    session_start();

    $fichier=fopen("data/movies.csv", "a");
    $test_genre = array_map('htmlspecialchars',$_POST['genre']);
    var_dump($test_genre);
/*
    // Attention on test d'abord si les entrées sont présentes avant d'échapper les caractères spéciaux

    if(!isset($_POST['num_id']) || !isset($_POST['titre']) || !isset($_POST['real']) || !isset($genre) || !isset($_POST['resume']) || !isset($_POST['date']) || empty($_POST['num_id']) || empty($_POST['titre']) || empty($_POST['real']) || empty($genre) || empty($_POST['resume']) || empty($_POST['date'])){
        header('Location: ajoutFilm.php');
        // On oublie pas de stopper le script 
        exit();
    }

    
    // Le else n'est pas obligatoire, vu qu'on fait un header(), exit() si une des entrées n'est pas présente

    $test_id=htmlspecialchars($_POST['num_id']);
    $test_titre=htmlspecialchars($_POST['titre']);
    $test_real=htmlspecialchars($_POST['real']);
    $test_genre=htmlspecialchars($genre);
    $test_resume=htmlspecialchars($_POST['resume']);
    $test_date=htmlspecialchars($_POST['date']);

    fputcsv($fichier,$test_id,";");
    fputcsv($fichier,$test_titre,";");
    fputcsv($fichier,$test_real,";");
    fputcsv($fichier,$test_genre,";");
    fputcsv($fichier,$test_resume,";");
    fputcsv($fichier,$test_date,";");
    
    // Attention pas de header() avant d'avoir fermé le fichier
    fclose($fichier);

    header('Location: index.php');
    exit();
*/
?>