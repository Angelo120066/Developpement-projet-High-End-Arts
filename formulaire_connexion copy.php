<?php include 'connexion.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High-End Arts - Connexion</title>
    <link rel="stylesheet" href="formumaire_connexion copy.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Effet Particules ou Dégradé animé -->
    <div id="background-animation"></div>

    <!-- En-tête -->
    <header>
        <img id="logo" src="images/Angelo-Logo.png" alt="Logo High-End Arts">
    </header>

    <!-- Contenu principal -->
    <main>
        <section id="section-8">
            <!-- Formulaire -->
            <form action="" method="POST">
                <div id="formulaire">
                    <div id="texte">
                        <h2>Bienvenue !</h2>
                        <p>Connectez-vous pour accéder à vos créations.</p>
                    </div>

                    <!-- Champs d'entrée -->
                    <div class="input-container">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" required>
                        <label for="username">Nom d'utilisateur</label>
                    </div>

                    <div class="input-container">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" required>
                        <label for="password">Mot de passe</label>
                    </div>

                    <!-- Checkbox -->
                    <div id="checkbox">
                        <input type="checkbox" id="remember-me" name="remember-me">
                        <label for="remember-me">Se souvenir de moi</label>
                    </div>

                    <!-- Bouton de connexion -->
                    <button class="btn-gradient" type="submit" name="formconnexion">Se Connecter</button>

                    <!-- Liens supplémentaires -->
                    <div id="liens">
                        <a href="#">Mot de passe oublié ?</a>
                        <a href="#">Créer un compte</a>
                    </div>

                    <!-- Social Login -->
                    <div id="social-login">
                        <div class="separator">
                            <span>Ou connectez-vous avec</span>
                        </div>
                        <div class="social-buttons">
                            <button class="google-btn">
                                <i class="fab fa-google"></i> Google
                            </button>
                            <button class="facebook-btn">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <br/>
            <?php
        if (isset($erreur)) {
            echo '<font color="red">' . $erreur . "</font>";
        }
        ?>
        </section>
    </main>
</body>
</html>
