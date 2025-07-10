<?php

session_start();


if(isset($_SESSION["auth_token"])) {

}



?>

<html>
<head>
    <title>Créer un compte</title>
    <link rel="icon" href="/public/img/icon_64.png" type="image/png">
    <link rel="stylesheet" href="/public/css/global.css" type="text/css">
    <link rel="stylesheet" href="/public/css/register.css" type="text/css">
    <link rel="preload" href="/public/img/background.png" as="image">
</head>
<?php //include_once __DIR__ . "/../components/header.php"?>
<body>
<main>
    <div id="register">
        <h1>Créer un compte<a></a></h1>
        <form>
            <div class="input-group">
                <label for="first-name">Prénom<a>&nbsp;*</a></label>
                <input type="text" id="first-name" name="first-name" required>
            </div>
            <div class="input-group">
                <label for="last-name">Nom<a>&nbsp;*</a></label>
                <input type="text" id="last-name" name="last-name" required>
            </div>
            <div class="input-group">
                <label for="in-game-name">Pseudonyme <i class="fa-solid fa-circle-question"></i></label>
                <input type="text" id="in-game-name" name="in-game-name">
            </div>
            <div class="input-group">
                <label for="mail">Adresse e-mail<a>&nbsp;*</a></label>
                <input type="text" id="mail" name="mail" required>
            </div>
            <div class="input-group">
                <label for="password">Créer un mot de passe<a>&nbsp;*</a></label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="password-confirm">Confirmer le mot de passe<a>&nbsp;*</a></label>
                <input type="password" id="password-confirm" name="password-confirm" required>
            </div>
            <div class="input-group">
                <label for="birthdate">Date de naissance<a>&nbsp;*</a></label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
                <label for="privacy-policy">J'acceptes le traitement et l'utilisation de mes données par <b>Spacenoop</b> dans le cadre de la <b>Politique de Confidentialité</b> du site <u>FairySofte.org</u><a>&nbsp;*</a></label>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="newsletter" name="newsletter">
                <label for="newsletter">Je souhaite recevoir les informations et nouveautés de l'assocation.<i>&nbsp;(optionnel)</i></label>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="spacenoop-news" name="spacenoop-news">
                <label for="spacenoop-news">Je souhaite être informé des dérnières nouveautés et applications de <b><u>Spacenoop</u></b>.<i>&nbsp;(optionnel)</i></label>
            </div>
            <button type="submit">Créer mon compte</button>
            <p>Vous avez déjà un compte ? <a href="/register">Connectez-vous</a></p>
        </form>
    </div>
</main>
</body>
<?php include_once __DIR__ . "/../components/footer.php"?>
</html>
