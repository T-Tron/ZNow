<?php
    session_start();
    if(!isset($_POST['birthDate'])) {
        header("Location: index.php?message=Veuillez compléter le formulaire d'inscription.");
    }
    if(empty($_POST['birthDate'])) {
        header("Location: index.php?message=Veuillez compléter le formulaire d'inscription.");
    }
    $_SESSION['birthDate'] = $_POST['birthDate'];
?>

<form action="register.php" method="POST">
    <input type="text" name="name" placeholder="Prenom" required>
    <input type="text" name="surname" placeholder="Nom" required>
    <input type="text" name="username" placeholder="Pseudo" required>
    <input type="text" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot De Passe" required>
    <input type="password" name="repeat-password" placeholder="Répeter Le Mot De Passe" required>
    <input type="submit" value="S'inscrire">
</form>