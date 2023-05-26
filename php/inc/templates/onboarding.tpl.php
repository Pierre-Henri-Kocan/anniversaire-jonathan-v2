<?php
require __DIR__ . '../../database/db.php';
require __DIR__ . '../../database/data.php';
?>
<div class="standard-banner">
    <h2>On boarding</h2>
    <p class="punchline">"On est au bon endroit et au bon moment qu’une seule fois dans sa vie"</p>
</div>

<div class="container-aside">
    <!-- Ce code était utilisé pour l'affichage du formulaire d'inscription à l'évènement
        <div class="container">
        <form action="" method="POST" class="form">
            <div class="form-input">
                <label class="label-text" for="name">Prénom - Nom</label>
                <select class="form-select" name="name">
                    <option>Selectionnez votre nom</option>
                    <?php foreach ($userList as $user) : ?>
                        <option><?= $user['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-input">
                <label class="label-text" for="email">E-mail</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Saisissez votre adresse email" required>
            </div>

            <div class="form-check">
                <div class="form-check-radio">
                    <input type="radio" id="oui" name="present" value="true" required>
                    <label class="label-text" for="present">Je serai présent</label>
                </div>
                <div class="form-check-radio">
                    <input type="radio" id="non" name="present" value="false">
                    <label class="label-text" for="present">Je ne serai pas présent</label>
                </div>
            </div>

            <div>
                <div class="form-input">
                    <label class="label-text" for="adult">Nombre d'adultes</label>
                    <input class="form-control" min="0" max="10" type="number" id="adult" name="adult" required>
                </div>
                <div class="form-input">
                    <label class="label-text" for="kid">Nombre d'enfants</label>
                    <input class="form-control" min="0" max="10" type="number" id="kid" name="kid" required>
                </div>
            </div>
            <div class="contact-submit">
                <button class="btn btn-primary btn-custom" type="submit">Envoyer</button>
            </div>
        </form>

        <script>
            const falseValue = document.querySelector('input[value="false"]');
            const adult = document.getElementById('adult');
            const kid = document.getElementById('kid');

            falseValue.addEventListener('change', () => {
                adult.value = '0';
                kid.value = '0';
            });
        </script>
    </div> -->

    <div class="aside">
        <div class="aside-answered">
            <h3 class="aside-h3">Personnes ayant répondu</h3>
            <ul>
                <?php if (!$presentName == '') : ?>
                    <?php foreach ($presentName as $user) : ?>
                        <li class="aside-li">
                            <td class="aside-td"><?= $user['name'] ?></td>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li class="aside-li-nb">
                        <td class="aside-td">0</td>
                    </li>
                <?php endif; ?>
            </ul>
            <h3 class="aside-h3"><a href="mailto:ph.kocan@icloud.com?subject=Demande de modification&cc=grimal.jonathan@gmail.com">Besoin d'apporter une modification ou une précision ?<br>Cliquez ici</h3></a>
        </div>
        <div class="aside-adult-kid">
            <div class="aside-adult">
                <h3 class="aside-h3">Adultes présents</h3>
                <ul>
                    <?php if (!$nb_adult_present == 0) : ?>
                        <?php foreach ($nb_adult_present as $user) : ?>
                            <li class="aside-li-nb">
                                <td class="aside-td"><?= $user["number"] ?></td>
                            </li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li class="aside-li-nb">
                            <td class="aside-td">0</td>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="aside-kid">
                <h3 class="aside-h3">Enfants présents</h3>
                <ul>
                    <?php if (!$nb_kid_present == 0) : ?>
                        <?php foreach ($nb_kid_present as $user) : ?>
                            <li class="aside-li-nb">
                                <td class="aside-td"><?= $user["number"] ?></td>
                            </li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li class="aside-li-nb">
                            <td class="aside-td">0</td>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>