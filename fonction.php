<?php
    function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }
?>

<!-- Récupère les tables de la base de données pour les stocker dans un tableau et les récupérer plus facilement en PHP -->