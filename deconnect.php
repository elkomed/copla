<?php
session_start();
$_SESSION = array();
session_destroy();// on détruit la session active 
header("location: index.php");
?>