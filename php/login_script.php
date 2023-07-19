<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
session_start();

$loginAttendu = 'admin';
$motDePasseAttendu = 'admin';

if ($_POST['login'] == $loginAttendu && $_POST['mot_de_passe'] == $motDePasseAttendu) {
    $_SESSION['auth'] = 'ok';
    header('Location: protect_page.php');   //rediriger vers une page
} else {
    unset($_SESSION['auth']);       //est utilisée pour supprimer une clé spécifique du tableau 
    header('Location: login_form.php'); 
}
?>
</body>
</html>