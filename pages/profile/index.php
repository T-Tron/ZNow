<?php

    session_start();
    $profileRequested = $_GET['id'];
    // Vérifier si un ID est entré
    if(!isset($_GET['id'])) {
        header("Location: ../../index.php");
    }

    require('../../config.php');
    $searchProfileInformations = $bdd->prepare("SELECT username, email, description, memberType, profilePicturePath, bannerPath, creationDate FROM users WHERE id = :id");
    $searchProfileInformations->execute(['id'=>$profileRequested]);
    $ProfileInformations = $searchProfileInformations->fetch();

    ?>
        <!-- HTML -->
        <img src="../../<?php echo $ProfileInformations['bannerPath']; ?>">
        <img src="../../<?php echo $ProfileInformations['profilePicturePath']; ?>">
        <p><?php echo $ProfileInformations['username']; ?></p>
        <p><?php echo $ProfileInformations['email']; ?></p>
        <p><?php echo ucfirst($ProfileInformations['memberType']); ?></p>
        <p><?php echo date('d/m/Y', strtotime($ProfileInformations['creationDate'])); ?></p>
    <?php

    // Vérifier si l'ID entré est le même que la session si il y en a une
    if(isset($_SESSION['loggedin']) AND $_SESSION['loggedin'] == true AND $_GET['id'] == $_SESSION['id']) {
        echo "<a href=\"edit/index.php?id=$profileRequested\">Modifier le profil</a>";
    }

?>