<?php
include './fonction.php';
// appelle le tableau des données
if(!empty($_POST)){ // si le formulaire n'est pas vide
$errors = array(); // affiche les erreurs

    if (empty($_POST['marque'])){ // si champ vide
        echo 'faux1';
    }
    elseif(empty($_POST['modele'])){
        echo 'faux2';
    }
    elseif(empty($_POST['prix'])){
        echo 'faux3';
    }
    elseif(empty($_POST['reference'])){
        echo 'faux4';
    }
    elseif(empty($_POST['descript'])){
        echo 'faux5';
    }
    elseif(empty($_POST['images'])){
        echo 'faux6';
    }

    else{
        $paire = valid_donnees($_POST['marque']);
        $paire = valid_donnees($_POST['modele']);
        $paire = valid_donnees($_POST['prix']);
        $paire = valid_donnees($_POST['reference']);
        $paire = valid_donnees($_POST['descript']);
        $paire = valid_donnees($_POST['images']);
        // stocke les variables rentrée dans le formulaire avec la méthode POST
       
        require "./bdd.php";
        // demande obligatoirement l'accés à la bdd pour éxecuter les requêtes
        $req = $pdo->prepare("INSERT INTO chaussures SET marque = ?,modele = ?, prix = ?, reference = ?,descript = ?,images = ?") ; // Execute la requête préparée, insert dans le INSERT INTO , dans la tables chaussures , le contenu récupérer pour chaque colonne
        $req->execute([$_POST['marque'],$_POST['modele'], $_POST['prix'], $_POST['reference'],$_POST['descript'],$_POST['images']]); // on execute la requetes avec les valeurs récupérées dans le formulaire
        
        echo "<script>alert('Paire ajoutée'; 
        </script>";
        

        exit();
    }
}

if(isset($errors)){

    $_SESSION['erreur'] = $errors;
    header('location: http://copla.rf.gd/insc.php/index1.php');
}
?>