<?php
// Active les erreurs pour mieux voir les problèmes
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=utilisateur', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "<pre>";
    // print_r($_POST); 
    // echo "</pre>";

    if (isset($_POST['submit'])) {
        // Vérifie si tous les champs existent avant de les utiliser
        $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
        $mail = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $mdp = isset($_POST['password']) ? sha1($_POST['password']) : '';
        $mdp2 = isset($_POST['confirm-password']) ? sha1($_POST['confirm-password']) : '';

        if (!empty($nom) && !empty($mail) && !empty($_POST['password']) && !empty($_POST['confirm-password'])) {
            if (strlen($nom) <= 255) {
                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $bdd->prepare("SELECT * FROM users WHERE `mail` = ?");
                    $reqmail->execute(array($mail));

                    if ($reqmail->rowCount() == 0) {
                        if ($mdp == $mdp2) {
                            if (!isset($_POST['cgu'])) {
                                echo "Vous devez accepter les conditions générales !";
                                exit();
                            }

                            $insertUser = $bdd->prepare("INSERT INTO users(name, `mail`, motdepasse) VALUES(?, ?, ?)");
                            $insertUser->execute(array($nom, $mail, $mdp));
                            $erreur = "Votre compte a bien été créé ! <a href='connexion.php'>Me connecter</a>";
                        } else {
                            $erreur = "Vos mots de passe ne correspondent pas !";
                        }
                    } else {
                        $erreur = "Adresse mail déjà utilisée !";
                    }
                } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            } else {
                $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
            }
        } else {
            $erreur = "Tous les champs doivent être complétés !";
        }
    }
} else {
    $erreur = "Le formulaire n'a pas été soumis.";
}
?>
