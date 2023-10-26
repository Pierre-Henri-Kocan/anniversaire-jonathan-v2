<?php

// Vérifie si le fichier a été correctement envoyé
if ($_FILES["fichier"]["error"] == UPLOAD_ERR_OK) {
    // Récupère le nom original du fichier sur l'ordinateur client
    $nomFichier = basename($_FILES["fichier"]["name"]);
    // Déplace le fichier téléchargé vers le répertoire de destination
    $destination = "uploads/" . $nomFichier; // Spécifiez le répertoire de destination ici
    if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $destination)) {
        header("Location: ../../../index.php?page=galerie&upload=success");
        exit();
    } else {
        header("Location: ../../../index.php?page=galerie&upload=error");
        exit();
    }
} else {
    header("Location: ../../../index.php?page=galerie&upload=error");
        exit();
}