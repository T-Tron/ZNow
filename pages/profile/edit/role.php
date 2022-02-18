<?php

    session_start();
    if(!isset($_SESSION['loggedin'])) {
        header("Location: ../../../index.php");
    }
    if($_GET['id'] != $_SESSION['id']) {
        header("Location: ../../../index.php");
    }

    require('../../../config.php');

    $req = $bdd->prepare("UPDATE users SET memberType = :memberType WHERE id = :id");
    $req->execute(['memberType'=>'vendeur', 'id'=>$_SESSION['id']]);

    header('Location: ../index.php?id=' . $_SESSION['id'] . '&message=Vous êtes désormais vendeur !');

?>