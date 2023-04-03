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
$userList = [];
$name = '';
$email = '';
$is_present = '';
$nb_adult = '';
$nb_kid = '';
$presentName = [];

// Affichage de la listes des invités
$userListSql = 'SELECT * FROM `user_list`';
$pdoStatement = $pdo->query($userListSql);
$userList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($userList);

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
Jonathan, qui fête bientôt ses 40 ans';

        // Définir les en-têtes de l'e-mail
        $headers = 'From: grimal.jonathan@gmail.com' . "\r\n" . 'Bcc: ph.kocan@gmail.com';
        mail($to, $sujet, $message, $headers);

        header('Location:php/inc/templates/success.tpl.php');
    }
}


