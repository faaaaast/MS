<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $db = new PDO('mysql:host=localhost;dbname=district', 'admin', 'Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    exit; 
}


?>