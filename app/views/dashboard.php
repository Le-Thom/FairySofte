<?php

?>

<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link href="/public/css/global.css" type="text/css" rel="stylesheet">
    <link href="/public/css/dashboard.css" type="text/css" rel="stylesheet">
    <link rel="preload" as="image" href="/public/img/background.png">
    <link rel="icon" href="/public/img/icon_48.png">
</head>
<body>
<?php include_once __DIR__ . "/../components/header.php" ?> 
<main>
    <div class="container">
        <section id="nav">
<!--            <table>-->
<!--                <tr>-->
<!--                    <td><i class="fa-solid fa-duotone fa-id-card"></td>-->
<!--                </tr>-->
<!--            </table>-->
            <h1>Tableau de bord</h1>
            <ul>
                <a>
                    <li class="nav-group <?php if(!isset($_GET["nav"])) echo "selected"; ?>">
                        <i class="fa-solid fa-duotone fa-id-card"></i> Profil
                    </li>
                </a>
                <a>
                    <li class="nav-group">
                        <i class="fa-solid fa-duotone fa-lock"></i> Sécurité
                    </li>
                </a>
                <a>
                    <li class="nav-group">
                        <i class="fa-solid fa-duotone fa-arrow-up-right-from-square"></i> Applications externes
                    </li>
                </a>
<!--                <li class="nav-group">-->
<!--                    <a><i class="fa-solid fa-id-card"></i> Vos informations</a>-->
<!--                </li>-->
<!--                <li class="nav-group">-->
<!--                    <a><i class="fa-solid fa-id-card"></i> Vos informations</a>-->
<!--                </li>-->
                <a>
                    <li class="nav-group">
                        <i class="fa-solid fa-duotone fa-envelopes"></i> Notifications
                    </li>
                </a>
                <a>
                    <li class="nav-group">
                        <i class="fa-solid fa-duotone fa-gear"></i> Vos Paramètres
                    </li>
                </a>
            </ul>
        </section>
        <img id="separator">
        <section id="content">
            <?php
            if(!isset($_GET["nav"])) {
                include_once __DIR__ . "/../components/userDashboard/accountInformations.php";
            }
            ?>
        </section>
    </div>
</main>
<?php include_once __DIR__ . "/../components/footer.php" ?>
</body>
</html>
