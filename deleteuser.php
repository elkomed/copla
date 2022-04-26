
<?php 
include './nav.php'; 
?>
<?php 

if(!isset($_POST['password']) OR $_POST['password'] != "azerty123")
{
?>
<fieldset>
<form action="./deleteuser.php" method="POST">
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

}else{
?>

<div class="db">
<?php
require "./bdd.php";
$req = $pdo-> query("SELECT * FROM users");// selectionne la table users complète
while($data = $req-> fetch()){ // récupère la table users, et l'assigne à la variable $data

    echo "<tr> <td> ID : $data->id</td> pour <td>$data->username</td>"; // affiche la colonne id et username de $data, qui a récupérer ma table users
    echo "<td>";
    echo "</td></tr><br>";
}
?></div>
<fieldset>


<form action="./delete.php" method="POST">
<div id="formulaire">
      <div class="input-form">
        <input type="text" name="id" id="id" placeholder=" " />
        <label for="id">ID Utilisateur</label>
      </div>
      
      <div class="submit-form">
        <button type="submit">Supprimer</button>
      </div>
</div>
</form>
</fieldset>
<?php 


}?>
<?php
include './footer.php';
?>
