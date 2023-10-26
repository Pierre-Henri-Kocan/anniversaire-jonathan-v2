<div class="form-container">
<?php
    // Vérifiez si le paramètre d'URL indiquant le succès est présent
    if (isset($_GET["upload"]) && $_GET["upload"] == "success") {
        echo '<div class="alert-custom" role="alert">Enregistrement réussi ! Merci</div>';
    }
    elseif (isset($_GET["upload"]) && $_GET["upload"] == "error") {
        echo '<div class="alert-custom" role="alert">L\'enregistrement a echoué</div>';
    }
    ?>

</div>
<div class="standard-banner" style="margin: 20px;">
    <h2>Envoi de photos</h2>
    <form action="php/inc/form/traitement.php" method="post" enctype="multipart/form-data">
        <!-- <label class="form-label" for="fichier">Sélectionnez votre photo :</label> -->
        <input class="form-control" type="file" id="fichier" name="fichier">
        <br><br>
        <button class="btn btn-primary mb-3" type="submit">Envoyer</button>
    </form>
</div>

