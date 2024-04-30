<?php
// Démarre la session
session_start();

// Détruit toutes les données de la session
session_destroy();

// Redirige vers la page d'accueil avec un message
header("Location: index.php?msg=Vous venez de vous déconnecter !");
exit;
?>

