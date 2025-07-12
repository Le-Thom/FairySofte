<?php

?>

<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link href="/public/css/global.css" type="text/css" rel="stylesheet">
    <link href="/public/css/dashboard.css" type="text/css" rel="stylesheet">
    <link rel="preload" as="image" href="/public/img/background.png">
</head>
<body>
<?php include_once __DIR__ . "/../components/header.php" ?> 
<main>
    <div class="container">
        <section id="nav">
            <ul>
                <li class="nav-group">
                    <a><i class="fa-solid fa-duotone fa-id-card"></i> Compte</a>
                </li>
                <li class="nav-group">
                    <a><i class="fa-solid fa-duotone fa-lock"></i> Sécurité</a>
                </li>
                <li class="nav-group">
                    <a><i class="fa-solid fa-duotone fa-arrow-up-right-from-square"></i> Applications externes</a>
                </li>
<!--                <li class="nav-group">-->
<!--                    <a><i class="fa-solid fa-id-card"></i> Vos informations</a>-->
<!--                </li>-->
<!--                <li class="nav-group">-->
<!--                    <a><i class="fa-solid fa-id-card"></i> Vos informations</a>-->
<!--                </li>-->
                <li class="nav-group">
                    <a><i class="fa-solid fa-duotone fa-envelopes"></i> Notifications</a>
                </li>
                <li class="nav-group">
                    <a><i class="fa-solid fa-duotone fa-gear"></i> Vos Paramètres</a>
                </li>
            </ul>
        </section>
        <img id="separator">
        <section id="content">
            
        </section>
    </div>
</main>
<?php include_once __DIR__ . "/../components/footer.php" ?>
</body>
</html>
