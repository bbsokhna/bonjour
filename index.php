
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Connexion</h2>
    <?php
    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'conn.php';
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        // Vérification des identifiants
        if ($login === $userLogin && $mdp === $userMdp) {
            session_start();
            $_SESSION['login'] = $login;
            header("Location: admin.php?msg=Bienvenue à la page d'administration du site");
            exit;
        } else {
            header("Location: index.php?msg=Login ou mot de passe incorrect !");
            exit;
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required><br><br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required><br><br>
        <input type="submit" value="Se connecter">
    </form>
    <?php
    // Affichage du message d'erreur si présent
    if (isset($_GET['msg'])) {
        echo '<p style="color: red;">' . $_GET['msg'] . '</p>';
    }
    ?>
</body>
</html>
