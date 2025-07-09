<?php

include_once __DIR__ . "/../imports/fonts.php";
include_once __DIR__ . "/../imports/icons.php";
include_once __DIR__ . "/../imports/animations.php";

?>

<header>
    <link href="/public/css/header.css" type="text/css" rel="stylesheet">
    <section id="logo">
        <img src="/public/img/icon_64.png">
        <p>Fairysofte</p>
    </section>
    <section id="nav">
        <nav>
            <a href="/"> <i class="fa-duotone fa-solid fa-house"></i>&nbsp;Home</a>
            <div class="list">
                <p class="list_head"><i class="fa-duotone fa-solid fa-farm"></i>&nbsp;l'Asso</p>
                <script>
                    for (let element of document.querySelectorAll("nav div.list")) {
                        element.addEventListener("mouseenter", () => {
                            element.children[element.children.length-1].classList.add("shown")
                        })
                        element.addEventListener("mouseleave", () => {
                            element.children[element.children.length-1].classList.remove("shown")
                        })
                    }
                </script>
                <div class="list_items">
                    <a href="/asso"><i class="fa-duotone fa-solid fa-radar"></i>&nbsp;Découvrir l'asso</a>
                    <a href="/asso/join"><i class="fa-duotone fa-solid fa-door-open"></i>&nbsp;Devenir adhérant</a>
                    <a href="/asso/documents"><i class="fa-duotone fa-solid fa-folder-open"></i>&nbsp;Documents et formulaires</a>
                </div>
            </div>
            <a href="/news"><i class="fa-duotone fa-solid fa-newspaper"></i>&nbsp;Nouveautés</a>
        </nav>
    </section>
    <section id="account">
        <?php
        if (!isset($_SESSION["auth_token"])) {
            ?>
        <p>LOG IN / SING UP</p>
        <?php
        } else {
            ?>
        <p>USERNAME</p>
        <img src="https://placehold.co/48">
        <?php
        }
        ?>
    </section>
</header>
