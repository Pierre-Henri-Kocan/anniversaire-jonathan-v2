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
                        <a class="nav-link <?= ($pageToDisplay == 'home') ? 'active' : ''; ?>" href="./">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pageToDisplay == 'onboarding') ? 'active' : ''; ?>" href="index.php?page=onboarding">On boarding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pageToDisplay == 'meeting') ? 'active' : ''; ?>" href="index.php?page=meeting">Réunion de chantier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($pageToDisplay == 'challenge') ? 'active' : ''; ?>" href="index.php?page=challenge">Challenge</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Cette section était pour l'affichage d'une bannière spécifique pendant un temps donné
        <section id="banner">
        <h1>Site un peu mou ? Besoin d'un remontant ?</h1>
        <p>Votre développeur préféré a <span class="banner-strong">LA</span> solution !</p>
        <p>Cliquez sur l'un des boutons ci-dessous pour découvrir l'escort qui nous charmera toute la soirée !</p>
        <div class="banner-pics">
            <a href="/php/public/images/brice-femme.jpg" target="_blank" class="banner-button">Pour vous mesdames</a>
            <a href="/php/public/images/brice-homme.jpg" target="_blank" class="banner-button">Pour vous messieurs</a>
        </div>
        <div class="banner-time" id="countdown">Temps restant pour en profiter :
            <span class="banner-time" id="days"></span> jours,
            <span class="banner-time" id="hours"></span> heures,
            <span class="banner-time" id="minutes"></span> minutes,
            <span class="banner-time" id="seconds"></span> secondes
        </div>
    </section>

    <script>
        var startSeconds;
        if (localStorage.getItem('startSeconds')) {
            startSeconds = parseInt(localStorage.getItem('startSeconds'));
        } else {
            startSeconds = Date.now() + (604800 * 1000); // temps de départ, une semaine plus tard
            localStorage.setItem('startSeconds', startSeconds);
        }

        var seconds = Math.round((startSeconds - Date.now()) / 1000);

        function countdown() {
            var days = Math.floor(seconds / (24 * 60 * 60));
            var hours = Math.floor((seconds % (24 * 60 * 60)) / (60 * 60));
            var minutes = Math.floor((seconds % (60 * 60)) / 60);
            var remainingSeconds = seconds % 60;

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = remainingSeconds;

            if (seconds == 0) {
                clearInterval(interval);
                var banner = document.getElementById("banner");
                banner.style.display = "none";
                localStorage.removeItem('startSeconds');
            } else {
                seconds--;
                localStorage.setItem('startSeconds', Date.now() + (seconds * 1000));
            }
        }

        var interval = setInterval(countdown, 1000);
    </script> -->