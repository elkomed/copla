
<?php 
include './nav.php'; 
// j'appelle la nav dans toutes les pages pour avoir toute sles balises que j'ai declaré dans le head et avoir le menu sur toute les pages ans avoir besoin de recopier le code.
?>
<?php 

if(!isset($_POST['password']) OR $_POST['password'] != "azerty123")//si le champ password est vide ou est différent du mdp définit, la page d'identification reste affichée
{
?>

<fieldset>
<form action="./ajtpaire.php" method="POST">
<div id="formulaire">
      <div class="input-form">
        <input type="text" name="password" id="password" placeholder=" " />
        <label for="id">Mot de passe</label>
      </div>
      
      <div class="submit-form">
        <button type="submit">Confirmer</button>
      </div>
</div>
</form>
</fieldset>
<?php 

}else{ // sinon on affiche le formulaire d'ajout de paire
?>

<fieldset>
 
<form action="./ajoutpaire.php" method="POST">    <!--on redirige le formulaire vers la fonction ajoutpaire qui contient nos requetes permettant d'importer le contenu dans la bdd-->
<div id="formulaire">
      <div class="input-form">
        <input type="text" name="marque" id="marque" placeholder=" " />
        <label for="marque">Marque</label>
      </div>

      <div class="input-form">
        <input type="text" name="modele" id="modele" placeholder=" " />
        <label for="modele">Modele</label>
      </div>
      <div class="input-form">
        <input type="text" name="prix" id="prix" placeholder=" " />
        <label for="prix">Prix</label>
      </div>
      <div class="input-form">
        <input type="text" name="reference" id="ref" placeholder=" " />
        <label for="reference">Reference</label>
      </div>
      <div class="input-form">
        <input type="text" name="descript" id="desc" placeholder=" " />
        <label for="descript">Description</label>
      </div>
      <div class="input-form">
        <input type="text" name="images" id="img" placeholder=" " />
        <label for="images">Image</label>
      </div>
      
      <div class="submit-form">
        <button type="submit">Envoi</button>
      </div>
</div>
</form>
</fieldset>
<?php 


}?>
<?php
include './footer.php';
?>

