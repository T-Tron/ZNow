<?php

	session_start();
	if(isset($_SESSION['loggedin']) AND $_SESSION['loggedin'] == true) {
        header("Location: ../../index.php");
    }

	if(!isset($_POST['name'], $_POST['surname'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['repeat-password'], $_SESSION['birthDate'])) {
		header("Location: index.php?message=Veuillez compléter le formulaire d'inscription.");
	}

	if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repeat-password']) || empty($_SESSION['birthDate'])) {
		header("Location: index.php?message=Veuillez compléter le formulaire d'inscription.");
	}

	require('../../config.php');

	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$description = $_POST['description'];
	$password = $_POST['password'];
	$password1 = $_POST['repeat-password'];
	$birthDate = $_SESSION['birthDate'];

	$check_email = $bdd->prepare("SELECT email FROM users WHERE email = :email");
	$check_email->execute(['email'=>$email]);
	$check_username = $bdd->prepare("SELECT username FROM users WHERE username = :username");
	$check_username->execute(['username'=>$username]);

	// Mot de passe identique
	if($password != $password1) {
		header("Location: index.php?message=Les mots de passe ne correspondent pas.");
	} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: index.php?message=Veuillez entrer une adresse mail valide.");
	} elseif(strlen($password) <= 6) {
		header("Location: index.php?message=Veuillez entrer un mot de passe plus grand que 6 caractères.");
	} elseif(strlen($username) <= 4) {
		header("Location: index.php?message=Veuillez entrer un pseudo plus grand que 4 caractères.");
	} elseif(strlen($description) >= 500) {
		header("Location: index.php?message=Votre description est trop grande. (500 caractères max)");
	} elseif($check_email->rowCount() > 0) {
		header("Location: index.php?messgae=Cette adresse email est déjà utilisée.");
	} elseif($check_username->rowCount() > 0) {
		header("Location: index.php?messgae=Ce pseudo est déjà utilisé.");
	} else {

		// Inscrire l'utilisateur
		$req = $bdd->prepare("INSERT INTO users(name, surname, username, description, email, password, birthDate, memberType, profilePicturePath, bannerPath, gamesPostedNumber, salesNumber, creationDate) VALUES(:name, :surname, :username, :description, :email, :password, :birthDate, :memberType, :profilePicturePath, :bannerPath, :gamesPostedNumber, :salesNumber, NOW())");
		$req->execute(['name'=>$name, 'surname'=>$surname, 'username'=>$username, 'description'=>$description, 'email'=>$email, 'password'=>password_hash($password, PASSWORD_DEFAULT), 'birthDate'=>$birthDate, 'memberType'=>'membre', 'profilePicturePath'=>'img/profilePictures/default.png', 'bannerPath'=>'img/profilePictures/banner/default.png', 'gamesPostedNumber'=>0, 'salesNumber'=>0]);

		header("Location: ../signin/index.php");

    }


?>