<?php

    session_start();
    if(!isset($_SESSION['loggedin']) OR $_GET['id'] != $_SESSION['id']) {
        header('Location: ../index.php?id=' . $_GET['id']);
    }

    $profileRequested = $_GET['id'];
    // Vérifier si un ID est entré
    if(!isset($_GET['id'])) {
        header("Location: ../../../index.php");
    }

    require('../../../config.php');
    $searchProfileInformations = $bdd->prepare("SELECT name, surname, description FROM users WHERE id = :id");
    $searchProfileInformations->execute(['id'=>$profileRequested]);
    $ProfileInformations = $searchProfileInformations->fetch();

    ?>
        <!-- HTML -->
        <form method="POST" action="profilePicture.php" enctype="multipart/form-data">
            <p>Photo de profil</p>
            <input type="file" name="profilePicture" required>
            <input type="submit" name="submit" value="Enregistrer">
        </form>

        <form method="POST" action="profileBanner.php" enctype="multipart/form-data">
            <p>Bannière</p>
            <input type="file" name="profileBanner" required>
            <input type="submit" name="submit" value="Enregistrer">
        </form>

        <form method="POST" action="edit.php">
        <input type="text" name="name" placeholder="Prénom" value="<?php echo $ProfileInformations['name']; ?>">
        <input type="text" name="surname" placeholder="Nom" value="<?php echo $ProfileInformations['surname']; ?>">
        <textarea name="description" cols="30" rows="10" placeholder="Description" value="<?php echo $ProfileInformations['description']; ?>"></textarea>
        <input type="password" name="password1" placeholder="Mot de passe">
        <input type="password" name="password2" placeholder="Confirmer le mot de passe">
        <input type="submit" value="Enregistrer">
        </form>
    <?php

?>