<?php

?>

<section>
    <style>
        section div.avatar {
            img {
                border-radius: 15%;
            }
            form {
                input {
                    display: none;
                }
            }
        }
    </style>
    <div class="avatar">
        <img src="https://placehold.co/96">
        <form method="POST">
            <div class="input-group button">
                <input type="file" formaction="POST" id="avatar" name="avatar" accept=".png, .jpeg, .jpg">
                <a href="#"><label for="avatar"><i class="fa-duotone fa-solid fa-tosolid-image-user-circle-ellipsis"></i>Changer mon avatar</label></a>
            </div>
        </form>
        <form method="POST">
            <div class="input-group button">
                <input type="submit" formaction="POST">
                <a href="#" style="background-color: #ffb0b0"><label for="avatar">Supprimer mon avatar</label></a>
            </div>
        </form>
    </div>
</section>

<form method="post" id="profile-form" enctype="multipart/form-data">
    <style>
        form#profile-form {
            section {
                div.avatar {
                    border: 1px solid red;
                    display: flex;
                    flex-direction: row;
                    align-items: end;
                    gap: .5rem;
                    div.input-group {
                        display: flex;
                        input {
                            display: none;
                        }
                        a {
                            /*margin: 0;*/
                            text-decoration: none;
                            color: #000;
                            background: #dfdfdf;
                            border-radius: .5rem;
                            padding: .4rem .7rem;
                        }
                        label {
                            cursor: pointer;
                        }
                    }
                }
            }
        }
    </style>
    <section>
        <div class="avatar">
            <img src="https://placehold.co/96" alt="Avatar">
            <div class="input-group button">
                <input type="file" accept=".png, .jpg, .jpeg" name="avatar" id="avatar" style="display: none">
                <a href="#"><label for="avatar">Changer mon avatar</label></a>
            </div>
            <div class="input-group button">
                <input type="submit" formaction="POST">
                <a href="#" style="background-color: #ffb0b0"><label for="avatar">Supprimer mon avatar</label></a>
            </div>
        </div>
        <h1>Vos informations</h1>
        <p>Vous pouvez modifier vos informations personnelles ici.</p>
        <table>
            <tr class="input-group">
                <td>
                    <label for="first-name">Prénom</label>
                </td>
                <td>
                    <input type="text" id="first-name" name="first-name" required>
                </td>
            </tr>
            <tr class="input-group">
                <td>
                    <label for="last-name">Nom de famille</label>
                </td>
                <td>
                    <input type="text" id="last-name" name="last-name" required>
                </td>
            </tr>
            <tr class="input-group">
                <td>
                    <label for="username">Nom d'utilisateur</label>
                </td>
                <td>
                    <input type="text" id="username" name="username" required>
                </td>
            </tr>
            <tr class="input-group">
                <td>
                    <label for="email">Adresse e-mail</label>
                </td>
                <td>
                    <input type="email" id="email" name="email" required>
                </td>
            </tr>
            <tr class="input-group">
                <td>
                    <label for="bio">Biographie</label>
                </td>
                <td>
                    <textarea id="bio" name="bio"></textarea>
                </td>
            </tr>
            <tr class="input-group">
                <td colspan="2">
                    <button type="submit">Mettre à jour les informations</button>
                </td>
            </tr>
        </table>
    </section>
</form>
