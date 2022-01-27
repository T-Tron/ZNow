<?php

	if(!isset($_POST['pseudo'], $_POST['password'])) {
		header("Location: index.php?message=Veuillez compléter le formulaire de connexion.");
	}

	if(empty($_POST['pseudo']) || empty($_POST['password'])) {
		header("Location: index.php?message=Veuillez compléter le formulaire de connexion.");
	}

	require('../../config.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$req = $bdd->prepare("SELECT id, username, password FROM users WHERE username = :username");
	$req->execute(['username'=>$username]);
	$res = $req->fetch();

		if(password_verify($password, $res['password'])) {
			session_start();
			$_SESSION['loggedin'] = true;
			$_SESSION['id'] = $res['id'];
			$_SESSION['username'] = $res['username'];
			header("Location: ../../index.php");
		} else {
			header("Location: index.php?message=Pseudo ou mot de passe incorrect.");
		}

?>