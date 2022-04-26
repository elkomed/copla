
<?php 
require "./auth2.php";
include './nav.php'; 
?>

<fieldset>
<form action="./insc.php" method="POST">
<div id="formulaire">
      <div class="input-form">
        <input type="text" name="email" id="email" placeholder=" " />
        <label for="email">Adresse email</label>
      </div>

      <div class="input-form">
        <input type="text" name="username" id="usname" placeholder=" " />
        <label for="username">Pseudo</label>
      </div>
      <div class="input-form">
        <input type="text" name="nom" id="nom" placeholder=" " />
        <label for="nom">Nom</label>
      </div>
      <div class="input-form">
        <input type="text" name="prenom" id="prename" placeholder=" " />
        <label for="prenom">Prénom</label>
      </div>
      <div class="input-form">
        <input type="password" name="user_pass" id="uspass" placeholder=" " />
        <label for="user_pass">Mot de passe</label>
      </div>

      <div class="input-form">
        <input type="password" name="confirm_pass" id="confpass" placeholder=" " />
        <label for="password">Confirmation du mot de passe</label>
      </div>

      <div class="submit-form">
        <button type="submit">Inscription</button>
      </div>
</div>
</form>
</fieldset>


<?php
include './footer.php';
?>
