<?php

    session_start();
    if(!isset($_SESSION['loggedin'])) {
        header('Location: ../../index.php');
    }

    require('../../config.php');

    if(isset($_POST['gameName'], $_POST['gameDescription'], $_FILES['image'])) {

        $countfiles = count($_FILES['image']['name']);
        if($countfiles >= 6) {
            for($i=0;$i<$countfiles;$i++){

                $errors = array();
                $fileName = strtolower($_FILES['image']['name'][$i]);
                $fileSize = $_FILES['image']['size'][$i];
                $fileTmp = $_FILES['image']['tmp_name'][$i];
                $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

                $extensions = array("jpeg", "jpg", "png");

                if(!in_array($fileExt, $extensions)) {
                    $errors[] = "Seulement les fichiers en JPEG, JPG et PNG sont autorisées";
                }

                if($fileSize > 15728640) {
                    $errors[] = "Le fichier doit faire moins de 15MB";
                }

                if(empty($errors) == true) {
                    move_uploaded_file($_FILES['image']['tmp_name'][$i], '../../img/games/'. $_SESSION['id'] . "-" . $i . "." . $fileExt);
                    // Récupérer le prochain ID du jeu
                    $searchLastID = $bdd->query("SELECT gameID FROM gamesverification ORDER BY creationDate DESC");
                    $lastID = $searchLastID->fetch();
                    $gameID = $lastID['gameID'] + 1;
                    // Envoyer les données
                    $req = $bdd->prepare("INSERT INTO gamesverification(byUserID, gameID, title, description, imagePath, creationDate) VALUES(:byUserID, :gameID, :title, :description, :imagePath, NOW())");
                    $req->execute(['byUserID'=>$_SESSION['id'], 'gameID'=>$gameID, 'title'=>$_POST['gameName'], 'description'=>$_POST['gameDescription'], 'imagePath'=>'mg/games/'. $_SESSION['id'] . "-" . $i . "." . $fileExt]);
                    header("Location: index.php?message=Jeu en cours de vérification");
                } else {
                    header("Location: index.php?message=Vérifier l'extension(JPEG, JPG, PNG) ou la taille des images ne doit pas dépasser 15MB");
                }

            }
        } else {
            header("Location: index.php?message=Il doit y avoir 6 images minimum");
        }
    }

?>