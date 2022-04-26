<?php
require './bdd.php';

session_start();
if(isset($_SESSION['username'])) {
  header("Location: index.php");
}



?>