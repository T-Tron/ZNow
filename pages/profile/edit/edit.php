<?php

    session_start();
    if(!isset($_SESSION['loggedin'])) {
        header("Location: ../../../index.php");
    }
    if($_GET['id'] != $_SESSION['id']) {
        header("Location: ../../../index.php");
    }

    require('../../../config.php');

    // Récupérer les infos
    $profileInformation = $bdd->prepare("SELECT name, surname, description FROM users WHERE id = :id");
    $profileInformation->execute(['id'=>$_SESSION['id']]);
    $profile = $profileInformation->fetch();

    // Mettre à jour les informations
    if(isset($_POST['name']) AND !empty($_POST['name']) AND $_POST['name'] != $profile['name']) {

        $newName = $_POST['name'];
        $insertName = $bdd->prepare("UPDATE users SET name = :name WHERE id = :id");
        $insertName->execute(['name'=>$newName, 'id'=>$_SESSION['id']]);
        header('Location: index.php?id=' . $_GET['id'] . '&message=Votre prénom a été modifié !');

    } elseif(isset($_POST['surname']) AND !empty($_POST['surname']) AND $_POST['surname'] != $profile['surname']) {

        $newSurname = $_POST['surname'];
        $insertSurname = $bdd->prepare("UPDATE users SET surname = :surname WHERE id = :id");
        $insertSurname->execute(['surname'=>$newSurname, 'id'=>$_SESSION['id']]);
        header('Location: index.php?id=' . $_GET['id'] . '&message=Votre nom a été modifié !');

    } elseif(isset($_POST['description']) AND !empty($_POST['description']) AND $_POST['description'] != $profile['description']) {

        $newDescription = $_POST['description'];
        $insertDescription = $bdd->prepare("UPDATE users SET description = :description WHERE id = :id");
        $insertDescription->execute(['description'=>$newDescription, 'id'=>$_SESSION['id']]);
        header('Location: index.php?id=' . $_GET['id'] . '&message=Votre description a été modifié !');

    } elseif(isset($_POST['password1']) AND !empty($_POST['password1']) AND isset($_POST['password2']) AND !empty($_POST['password2'])) {

		if(strlen($_POST['password1']) <= 6) {
			header("Location: index.php?message=Veuillez entrer un mot de passe plus grand que 6 caractères.");
		} elseif($_POST['password1'] == $_POST['password2']) {
			$newPassword = password_hash($_POST['password1'], PASSWORD_DEFAULT);
			$insertNewPassword = $bdd->prepare("UPDATE users SET password = :password WHERE id = :id");
			$insertNewPassword->execute(['password'=>$newPassword, 'id'=>$_SESSION['id']]);
			header('Location: index.php?id=' . $_GET['id'] . '&message=Votre mot de passe a été modifié !');
		} else {
			header('Location: index.php?id=' . $_GET['id'] . '&message=Les deux mots de passes ne correspondent pas.');
		}

	} else {
		header("Location: ../../../index.php");
	}

?>