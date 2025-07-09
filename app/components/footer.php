<?php

include_once __DIR__ . "/../imports/icons.php";

?>

<footer>
    <link href="/public/css/footer.css" rel="stylesheet" type="text/css">
    <section id="description">
        <div>
            <div class="head">
                <img src="/public/img/icon_48.png">
                <h1>FairySofte</h1>
            </div>
            <p><b>FairySofte</b> est une association de joueurs de airsoft proposant des rencontres et matchs amicaux pour ses adhérents.</p>
        </div>
        <ul>
            <li>
                <a href="/socials/telegram">
                    <i class="fa-brands fa-telegram"></i>
                    <p>Groupe Telegram</p>
                </a>
                <a href="/socials/instagram">
                    <i class="fa-brands fa-instagram"></i>
                    <p>Instagram</p>
                </a>
                <a href="/socials/twitter-x">
                    <i class="fa-brands fa-x-twitter"></i>
                    <p>Twitter / X</p>
                </a>
                <a href="/socials/youtube">
                    <i class="fa-brands fa-youtube"></i>
                    <p>Chaine YouTube</p>
                </a>
            </li>
        </ul>
        <script>
            for (let e of document.querySelectorAll("footer section#description ul li a")) {
                e.addEventListener("mouseenter", () => {
                    e.children[e.children.length-1].classList.add("shown")
                })
                e.addEventListener("mouseleave", () => {
                    e.children[e.children.length-1].classList.remove("shown")
                })
            }
        </script>
    </section>
    <section id="socials">
    </section>
    <section id="links">
        <div id="link-list">
            <p class="link-head">Site Web</p>
            <a href="/">Page d'accueil</a>
            <a href="/">Prochaines sessions</a>
            <a href="/">S'inscrire à une session</a>
        </div>
        <div id="link-list">
            <p class="link-head">Association</p>
            <a href="/">Détails de l'Asso</a>
            <a href="/">Adhérer a l'Asso</a>
            <a href="/">Documents et Outils</a>
        </div>
        <div id="link-list">
            <p class="link-head">Chartes</p>
            <a href="/terms">Conditions d'utilisation</a>
            <a href="/privacy">Politique de confidentialité</a>
            <a href="/legal">Mentions légales</a>
        </div>
    </section>
</footer>
