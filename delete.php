<?php
include 'forum.php';

if (isset($_GET['type']) && isset($_GET['id'])) {
    $type = $_GET['type'];
    $id = intval($_GET['id']);

    switch ($type) {
        case 'user':
            $pdo->query("DELETE FROM users WHERE id = $id");
            break;
        case 'post':
            $pdo->query("DELETE FROM posts WHERE id = $id");
            break;
        case 'comment':
            $pdo->query("DELETE FROM comments WHERE id = $id");
            break;
    }
}

header('Location: dashboard.php');
exit;
?>
