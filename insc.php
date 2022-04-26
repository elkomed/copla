<?php
include './fonction.php';

if(!empty($_POST)){
$errors = array();

    if (empty($_POST['email'])){
        echo 'faux1';
    }
    elseif(empty($_POST['nom'])){
        echo 'faux2';
    }
    elseif(empty($_POST['prenom'])){
        echo 'faux3';
    }
    elseif(empty($_POST['username'])){
        echo 'faux4';
    }
    elseif(strlen($_POST['user_pass']) < 6 ){ // vérifie si le mot de passe est inferieur à 10 , et si c'est le cas l'instruction n'est pas validée
        echo 'faux5';
    }
    elseif(empty($_POST['user_pass'])){
        echo 'faux6';
    }
    elseif(($_POST['user_pass']) != ($_POST['confirm_pass'])){ // vérifie si le user_pass est différent de confirm_pass et si c'est le cas l'instruction n'est pas validée
        echo 'faux7';
    }
    else{
        $username = valid_donnees($_POST['email']);
        $username = valid_donnees($_POST['username']);
        $username = valid_donnees($_POST['nom']);
        $username = valid_donnees($_POST['prenom']);
        $prenomus =  valid_donnees($_POST['username']);
        require "./bdd.php";
        $req = $pdo->prepare("INSERT INTO users SET email = ?,username = ?, nom = ?, prenom = ?,user_pass = ?") ;
        $password = password_hash($_POST['user_pass'], PASSWORD_BCRYPT); // récupère le mot de passe entrée et le stock dans une variable , pour le crypter avec la méthode PASSWORD_BCRYPT , qui utilise le hash Blowfish.
        $req->execute([$_POST['email'],$_POST['username'], $_POST['nom'], $_POST['prenom'], $password]);
        
        echo "<script>alert('Vous êtes bien inscrit $prenomus');
        window.location.href='login.php'; 
        </script>";
        

        exit();
    }
}

if(isset($errors)){

    $_SESSION['erreur'] = $errors;
    header('location: ./index1.php');
}
?>