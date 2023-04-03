<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="php/public/css/reset.css">
    <link rel="stylesheet" href="php/public/css/style.css">
    <link rel="shortcut icon" href="php/public/images/favicon.ico" type="image/x-icon">
    <title>40 ans de Jonathan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="./"><img class="avatar" src="php/public/images/avatar.png" alt="avatar"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= ( $pageToDisplay == 'home' ) ? 'active' : '' ; ?>" href="./">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ( $pageToDisplay == 'onboarding' ) ? 'active' : '' ; ?>" href="index.php?page=onboarding">On boarding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ( $pageToDisplay == 'goodtips' ) ? 'active' : '' ; ?>" href="index.php?page=goodtips">Les bons tuyaux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ( $pageToDisplay == 'challenge' ) ? 'active' : '' ; ?>" href="index.php?page=challenge">Challenge</a>
                    </li>
</ul>
            </div>
        </div>
    </nav>