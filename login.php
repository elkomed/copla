
<?php 
require "./auth2.php";
include './nav.php'; 
?>

<fieldset>
    <form action="./log_exec.php" method="POST">    
<div id="formulaire1">
    <div class="input-form">
        <input type="text" name="username" id="usname" placeholder=" " />
        <label for="username">Pseudo</label>
    </div>
    <div class="input-form">
        <input type="password" name="user_pass" id="uspass" placeholder=" " />
        <label for="user_pass">Mot de passe</label>
    </div>

    <div class="submit-form">
        <button type="submit" name="submit">Connexion</button>
    </div>
</div>
</fieldset>

<?php
include './footer.php';
?>
