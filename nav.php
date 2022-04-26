<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/b7ddc1b7de.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0-rc.2/jquery-ui.js"
        integrity="sha256-bLjSmbMs5XYwqLIj5ppZFblCo0/9jfdiG/WjPhg52/M=" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
<body>


<nav>
<figure>
    <figcaption>Musique de fond</figcaption>
    <audio
        controls autoplay
        src="./sound.mp3">
            Your browser does not support the
            <code>audio</code> element.
    </audio>
</figure>

<div class="resp">
<img src="./logo.png" alt="logo" id="logo"/>
<p class="menu">Menu</p>
<div class="menuresp">
<li><a href="index.php">Accueil</a></li>
    <li><a href="product.php">Produits</li>
    <li><a href="login.php">Connexion</a></li>
    <li><a href="signup.php">Inscription</a></li>
    <li>
<p id="sessionmob"><?php

if (isset($_SESSION['username'])) {
    echo  "<script>document.getElementById('sessionmob').innerHTML = 
    'Vous etes connectés en tant que $_SESSION[username]';
    </script>";
  } else {
    echo  "<script>document.getElementById('sessionmob').innerHTML = 't pas co batar';
    </script>";
  }

  
?></p></li>
    <li><a id="decomob" href="./deconnect.php">deconnexion</a>
</li>
</div>
</div>
<ul>
    <li class="survol"><a href="./index.php">Accueil</a></li>
    <li class="survol"><a href="./product.php">Produits</li>
    <li><img src="./logo.png" alt="logo"/></li>
    <li class="survol"><a href="login.php">Connexion</a></li>
    <li class="survol"><a href="signup.php">Inscription</a></li>
</ul>

<p id="session"><?php

if (isset($_SESSION['username'])) {
    echo  "<script>document.getElementById('session').innerHTML = 'Vous etes connectés en tant que $_SESSION[username]';
    </script>";
  } else {
    echo  "<script>document.getElementById('session').innerHTML = 'Vous n êtes pas connecté';
    </script>";
  }
?></p>

 <?php

if (isset($_SESSION['username'])) {
    echo  "<a id='deco' href='./deconnect.php'>deconnexion</a>";
  } else {

  }
?>
</a>
</li>

</nav>

