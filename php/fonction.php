<h2>EXO3</h2>

<hr><br>

<?php
function genererLien($lien, $titre) {
    $lienHTML = "<a href=\"$lien\">$titre</a>";
    return $lienHTML;
}

$lienGeneré = genererLien("https://www.reddit.com/", "Reddit Hug");
echo $lienGeneré;
?>

<br><hr><br>

<?php
function somme($tab) {
    $somme = 0;
    foreach ($tab as $valeur) {
      $somme += $valeur;
    }
    return $somme;
  }
  
  $tab = array(4, 3, 8, 2);   //calculer la valeur du tableau
  $resultat = somme($tab);
  echo $resultat;   
?>

<br><hr><br>

<?php
function complex_password($password) {
    // Vérifier la longueur
    if (strlen($password) < 8) {
      return false;
    }
    
    // Vérifier la présence d'un chiffre
    if (!preg_match('/[0-9]/', $password)) {
      return false;
    }
    
    // Vérifier la présence d'une majuscule et une minuscule
    if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
      return false;
    }
    
    // le mot de passe est valide
    return true;
  }
  
  $resultat = complex_password("TopSecret42");
  var_dump($resultat);  
?>