<?php
session_start();

if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 'ok') {
    header('Location: login_form.php'); // 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page protégée</title>
</head>
<body>
    <h1>Page protégée</h1>
    <p>Bienvenue sur la page protégée.</p>
    <p><a href="logout.php">Se déconnecter</a></p>
</body>
</html>