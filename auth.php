<?php
require './bdd.php';

session_start(); // on démarre une session
if(!isset($_SESSION['username'])) { 
  // si la session n'est pas active , on redirige vers la page de connexion
  header("Location: login.php");
}


?>