<?php
include './fonction.php';

if(!empty($_POST)){
$errors = array();

    if (empty($_POST['id'])){
        echo 'faux1';
    }
   
    else{
        $paire = valid_donnees($_POST['id']);// récupère l'id que l'on a rentré
       
        require "./bdd.php";
        $req = $pdo->prepare("DELETE FROM `users` WHERE `users`.`id` = $paire") ; // supprime de la table user , l'id qu'on a rentré qui correspond à l'utilisateur concerné
        $req->execute([$_POST['id']]); // affecte l'id entré dans la requête
        header('location: ./deleteuser.php');
        

        exit();// quitte le code
    }
}

if(isset($errors)){

    $_SESSION['erreur'] = $errors;
    header('location: ./index1.php');
}
?>