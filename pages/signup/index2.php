<?php
    session_start();
    if(isset($_SESSION['loggedin']) AND $_SESSION['loggedin'] == true) {
        header("Location: ../../index.php");
    }
    
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
    <textarea name="description" cols="30" rows="10" maxlength="500" placeholder="Description" required></textarea>
    <input type="password" name="password" placeholder="Mot De Passe" required>
    <input type="password" name="repeat-password" placeholder="Répeter Le Mot De Passe" required>
    <input type="submit" value="S'inscrire">
</form>