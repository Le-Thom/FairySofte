<?php

?>

<section>
    <style>
        section div.avatar {
            display: flex;
            flex-direction: row;
            align-items: end;
            gap: .5rem;
            img {
                border-radius: 15%;
            }
            form {
                input {
                    display: none;
                }
                label {
                    /*font-size: 1.1rem;*/
                    color: #000;
                    background: #dfdfdf;
                    border-radius: .5rem;
                    padding: .4rem .7rem;
                    cursor: pointer;
                    align-items: center;
                    a {
                        text-decoration: none;
                        color: inherit;
                        svg {
                            font-size: 1.2rem;
                        }
                    }
                }
            }
        }
    </style>
    <div class="avatar">
<!--        <img src="https://placehold.co/96">-->
        <img src="/public/svg/square-user-solid-full.svg" width="96" height="96" alt="Avatar">
        <form method="POST">
            <div class="input-group button">
                <input type="file" formaction="POST" id="avatar" name="avatar" accept=".png, .jpeg, .jpg">
                <label for="avatar"><a href="#"><i class="fa-duotone fa-solid fa-pen-to-square"></i>&nbsp;Changer mon avatar</a></label>
            </div>
        </form>
        <form method="POST">
            <div class="input-group button">
                <input type="submit" formaction="POST">
                <label for="avatar" style="background-color: #ffb0b0"><a href="#"><i class="fa-duotone fa-solid fa-eraser"></i>&nbsp;Supprimer mon avatar</a></label>
            </div>
        </form>
    </div>
</section>

<form method="post" id="profile-form" enctype="multipart/form-data">
    <style>
        form#profile-form {
            section {
                display: grid;
                grid-template-columns: repeat(2, max-content);
                grid-row-gap: .5rem;
                input[type="text"], input[type="email"] {
                    /*width: max-content;*/
                    border-radius: .3rem;
                    /*font-size: 1.1rem;*/
                    padding: .3rem .5rem;
                    border: #d5d5d5 2px solid;
                    width: 1fr;
                }
                textarea {
                    resize: vertical;
                    border: none;
                    width: 20rem;
                }
                label {
                    padding: 0 1.5rem 0 0;
                    align-self: center;
                    justify-self: left;
                    justify-content: center;
                }
            }
        }
    </style>
    <h1>Vos informations</h1>
<!--    <p>Vous pouvez modifier vos informations personnelles ici.</p>-->
    <section>
        <label for="first-name">Prénom</label>
        <input type="text" id="first-name" name="first-name" required>
        <label for="last-name">Nom de famille</label>
        <input type="text" id="last-name" name="last-name" required>
        <label for="username">Nom d'utilisateur</label>
        <input type="text" id="username" name="username" required>
        <label for="email">Adresse e-mail</label>
        <input type="email" id="email" name="email" required>
        <label for="bio">Biographie</label>
        <textarea id="bio" name="bio"></textarea>
    </section>
    <button type="submit">Mettre à jour les informations</button>
</form>
