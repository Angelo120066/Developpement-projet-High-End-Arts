<?php
session_start();

// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=utilisateur', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Vérifie si le formulaire a été soumis
if (isset($_POST['formconnexion'])) {
    // Récupérer les données envoyées par le formulaire
    $usernameconnect = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; // Nom d'utilisateur
    $mdpconnect = isset($_POST['password']) ? sha1($_POST['password']) : ''; // Mot de passe (hashé)

    // Vérifie si les champs sont non vides
    if (!empty($usernameconnect) && !empty($mdpconnect)) {
        // Préparer la requête pour vérifier si un utilisateur existe avec ce nom d'utilisateur et ce mot de passe
        $requser = $bdd->prepare("SELECT * FROM users WHERE `name` = ? AND `motdepasse` = ?");
        $requser->execute(array($usernameconnect, $mdpconnect));
        
        $userexist = $requser->rowCount();  // Vérifie s'il y a un utilisateur qui correspond

        if ($userexist == 1) {
            // Si l'utilisateur existe, récupère ses informations
            $userinfo = $requser->fetch();
            // Créer un cookie pour l'utilisateur (ex: cookie qui dure 30 jours)
            setcookie("user_id", $userinfo['id'], time() + 30*24*60*60, "/");  // Cookie pour l'ID de l'utilisateur
            setcookie("user_name", $userinfo['name'], time() + 30*24*60*60, "/");  // Cookie pour le nom de l'utilisateur
            // $_SESSION['id'] = $userinfo['id'];  
            // $_SESSION['name'] = $userinfo['name']; 
            // $_SESSION['mail'] = $userinfo['mail'];  

            // Redirige vers une autre page (par exemple la page d'accueil ou profil)
            header("Location: couverture copy.php");
            exit(); // Ne pas oublier le exit après la redirection
        } else {
            // Si l'utilisateur n'existe pas, afficher une erreur
            $erreur = "Mauvais nom d'utilisateur ou mot de passe !";
        }
    } else {
        // Si les champs ne sont pas remplis
        $erreur = "Tous les champs doivent être complétés !";
    }
}

?>

<!-- Affichage de l'erreur -->
<?php if (isset($erreur)) { echo '<font color="red">' . $erreur . '</font>'; } ?>
