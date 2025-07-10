<?php

session_start();


if(isset($_SESSION["auth_token"])) {

}



?>

<html>
<head>
    <title>Connexion</title>
    <link rel="icon" href="/public/img/icon_64.png" type="image/png">
    <link rel="stylesheet" href="/public/css/global.css" type="text/css">
    <link rel="stylesheet" href="/public/css/login.css" type="text/css">
    <link rel="preload" href="/public/img/background.png" as="image">
</head>
<?php //include_once __DIR__ . "/../components/header.php"?>
<body>
<main>
    <div id="login">
        <h1>Connexion<a>&nbsp;</a></h1>
        <form>
            <div class="input-group">
                <label for="mail">Adresse e-mail</label>
                <input type="text" id="mail" name="mail" required>
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
            <p>Pas encore inscrit ? <a href="/register">Créer un compte</a></p>
        </form>
    </div>
</main>
</body>
<?php include_once __DIR__ . "/../components/footer.php"?>
</html>
