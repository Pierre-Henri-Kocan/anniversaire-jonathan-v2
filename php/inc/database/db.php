<?php

$dataSource = 'mysql:host=localhost:8889;dbname=anniv_tonton';
$user = 'root';
$pass = 'root';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];

try {
    $pdo = new PDO($dataSource, $user, $pass, $options);
} 

catch (PDOException $exception) {
    echo "La connexion a échoué : " . $exception->getMessage();
}

// Initialisation de variables
$name = '';
$email = '';
$is_present = '';
$nb_adult = '';
$nb_kid = '';
$presentName = [];
$nb_adult_present = [];
$nb_kid_present = [];

// Affichage de la listes des personnes qui se sont enregistrées
$presentNameSql = 'SELECT * FROM `user`';
$pdoStatement = $pdo->query($presentNameSql);
$presentName = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($presentName);

// Affichage du nombre d'adultes qui seront présents
$list_adult_present_sql = 'SELECT * FROM `user` WHERE `is_present` = "true"';
$pdoStatement = $pdo->query($list_adult_present_sql);
$list_adult_present = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($list_adult_present);

// Affichage du nombre d'adultes qui seront présents
$nb_adult_present_sql = 'SELECT SUM(`nb_adult`) AS "number" FROM `user` WHERE `is_present` = "true"';
$pdoStatement = $pdo->query($nb_adult_present_sql);
$nb_adult_present = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($nb_adult_present);

// Affichage du nombre d'enfants qui seront présents
$nb_kid_present_sql = 'SELECT SUM(`nb_kid`) AS "number" FROM `user` WHERE `is_present` = "true"';
$pdoStatement = $pdo->query($nb_kid_present_sql);
$nb_kid_present = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($nb_adult_present);

// Si le formulaire a été soumis
if (!empty($_POST)) {

    // Récupération des valeurs du formulaire dans des variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $is_present = $_POST['present'];
    $nb_adult = $_POST['adult'];
    $nb_kid = $_POST['kid'];

    // Récupération des noms déjà en base
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM user WHERE name = :name");
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        header('Location:php/inc/templates/error.tpl.php');
    } else {
        $sql = "INSERT INTO user (name, email, is_present, nb_adult, nb_kid, created_at) VALUES (:name, :email, :is_present, :nb_adult, :nb_kid, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':name' => $name, ':email' => $email, ':is_present' => $is_present, ':nb_adult' => $nb_adult, ':nb_kid' => $nb_kid));
        // Envoi d'un accusé de réception

        // Récupérer les données du formulaire
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Définir le destinataire de l'e-mail
        $to = $email;

        // Définir le sujet de l'e-mail
        $sujet = 'Accusé de réception';

        // Définir le contenu de l'e-mail
        $message = 'Bonjour ' . $name . ', 

J\'ai bien pris en compte les informations que vous m\'avez transmises.

A très vite,
Jonathan';

        // Définir les en-têtes de l'e-mail
        $headers = 'From: grimal.jonathan@gmail.com' . "\r\n" . 'Bcc: ph.kocan@gmail.com';
        mail($to, $sujet, $message, $headers);

        header('Location:php/inc/templates/success.tpl.php');
    }
}

