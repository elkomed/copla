
<?php

$pdo = new PDO("mysql:host=localhost;dbname=copla", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>

<!--  On utilise le nom de la classe PDO. Le constructeur accepte des paramètres pour spécifier la source de la base de données 
et pour notre cas, le nom d'utilisateur et le mot de passe. -->

<!-- setAttribute — Configure un attribut PDO -->

<!-- PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ; rapports d'erreurs -->

<!-- PDO::ATTR_DEFAULT_FETCH_MODE ; Définit le mode de récupération par défaut -->

