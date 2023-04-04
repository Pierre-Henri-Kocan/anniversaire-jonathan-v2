<?php
require __DIR__ . '../../database/db.php';
?>
<div class="standard-banner">
    <h2>On boarding</h2>
    <p class="punchline">"On est au bon endroit au bon moment qu’une seule fois dans sa vie"</p>
</div>

<div class="container-aside">
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
                    <label class="label-text" for="present">Je serais présent</label>
                </div>
                <div class="form-check-radio">
                    <input type="radio" id="non" name="present" value="false">
                    <label class="label-text" for="present">Je ne serais pas présent</label>
                </div>
            </div>

            <div>
                <div class="form-input">
                    <label class="label-text" for="adult">Nombre d'adulte</label>
                    <input class="form-control" min="0" max="10" type="number" id="adult" name="adult" required>
                </div>
                <div class="form-input">
                    <label class="label-text" for="kid">Nombre d'enfant</label>
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
    </div>

    <div class="aside">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Personnes présentes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The table body</td>
                </tr>
            </tbody>
        </table>
        </div>
</div>