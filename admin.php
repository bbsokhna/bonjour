
<?php
// Vérifie si l'utilisateur est connecté
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php?msg=Vous devez vous connecter pour accéder à cette page !");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'administration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Page d'administration du site</h2>
    <?php
    // Affiche le message de bienvenue
    if (isset($_GET['msg'])) {
        echo '<p style="color: green;">' . $_GET['msg'] . '</p>';
    }
    ?>
    
    <!-- Liens pour la déconnexion et la page d'accueil -->
    <p><a href="deconnexion.php">Se déconnecter</a> | <a href="index.php">Accueil</a></p>
    
    <!-- Contenu de la page d'administration -->
</body>
</html>
apps-fileview.texmex_20240418.00_p1
ADMIN.PHP
Affichage de ADMIN.PHP