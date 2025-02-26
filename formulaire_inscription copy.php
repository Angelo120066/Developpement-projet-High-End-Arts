<?php include 'inscription.php'; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>High-End Arts - Inscription</title>
        <link rel="stylesheet" href="formulaire_inscription copy.css">
        <!-- FontAwesome pour les icônes -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <!-- Animate.css pour les animations -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>

    <body>
        <!-- Arrière-plan dynamique -->
        <div class="background"></div>

        <main>
            <section id="inscription-section" class="animate__animated animate__fadeInUp">
                <!-- Formulaire -->
                <div id="formulaire_inscription">
                    <!-- Logo -->
                    <header>
                        <img id="logo" src="images/angelo-logo.png" alt="Logo High-End Arts">
                    </header>
                    
                    <!-- Titre -->
                    <h1>Créer un compte</h1>
                    <p>Inscrivez-vous pour accéder à toutes les fonctionnalités</p>

                    <!-- Champs du formulaire -->
                    <form action="" method="POST">
                        <div class="input-container">
                            <i class="fas fa-user"></i>
                            <input type="text" id="nom" name="nom" placeholder="Nom" required>
                        </div>
                        <div class="input-container">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-container">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                        </div>
                        <div class="input-container">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmer le mot de passe" required>
                        </div>

                        <div id="case-a-cocher">
                            <input type="checkbox" id="cgu" name="cgu" required>
                            <label for="cgu">J'accepte les <a href="#">conditions générales</a></label>
                        </div>

                        <button type="submit" name="submit" class="btn-submit">Créer un compte</button>
                    </form>

                                    <?php
                            if (isset($erreur)) {
                                echo '<font color="red">' . $erreur . "</font>";
                            }
                            ?>
                    <!-- Connexion via réseaux sociaux -->
                    <div id="social-login">
                        <p>Ou inscrivez-vous avec</p>
                        <button class="social-btn google-btn"><i class="fab fa-google"></i> Google</button>
                        <button class="social-btn facebook-btn"><i class="fab fa-facebook-f"></i> Facebook</button>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
