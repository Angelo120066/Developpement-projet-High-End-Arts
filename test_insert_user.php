<?php
include 'forum.php';

$sql = "INSERT INTO users (username, email, password) VALUES ('testuser', 'test@example.com', 'motdepasse')";
$stmt = $pdo->prepare($sql);

    if ($stmt->execute()) {
        echo "✅ Utilisateur ajouté avec succès !";
    } else {
        echo "❌ Erreur lors de l'ajout de l'utilisateur.";
    }

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "👤 Utilisateur : " . $row['username'] . " - Email : " . $row['email'] . "<br>";
    }

$sql = "INSERT INTO posts (user_id, title, content) VALUES (1, 'Mon premier post', 'Ceci est un test.')";
$stmt = $pdo->prepare($sql);

    if ($stmt->execute()) {
        echo "✅ Post ajouté avec succès !";
    } else {
        echo "❌ Erreur lors de l'ajout du post.";
    }

$sql = "INSERT INTO comments (post_id, user_id, content) VALUES (1, 1, 'Superbe post !')";
$stmt = $pdo->prepare($sql);
    
    if ($stmt->execute()) {
        echo "✅ Commentaire ajouté avec succès !";
    } else {
        echo "❌ Erreur lors de l'ajout du commentaire.";
    }

$sql = "SELECT comments.content, users.username 
    FROM comments 
    JOIN users ON comments.user_id = users.id
    WHERE post_id = 1";
$stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "💬 " . $row['username'] . " : " . $row['content'] . "<br>";
    }

?>
