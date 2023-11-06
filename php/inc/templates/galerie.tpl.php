
<div class="standard-banner" style="margin: 20px;">
    <h2>Envoi de photos</h2>
    <form action="php/inc/form/traitement.php" method="post" enctype="multipart/form-data">
        <label class="form-label" for="fichier">Sélectionnez votre photo (max 2Mo) :</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        <input class="form-control" type="file" id="fichier" name="fichier">
        <br><br>
        <button class="btn btn-primary mb-3" type="submit">Envoyer</button>
    </form>
</div>

<p class="upload-text">Parce que vous l'attendiez, voici les photos déjà reçues !</p>
<div class="upload-images">
    <?php 
    //phpinfo();
    $dossier = 'php/inc/form/uploads/';
    $images = array_diff(scandir($dossier), array('..', '.'));
    foreach($images as $image) { 
      echo '<div class="card" style="width: 18rem;">';
      echo '<img src="' . $dossier . $image . '" class="card-img-top" alt="...">';
      echo '</div>';
    } ?>
</div>



