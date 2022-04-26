<?php
require './bdd.php';
if(isset($_POST['submit'])) // au click du bouton submit, on vérifie si les champs sont vides
{
    if(empty($_POST['username']) || empty($_POST['user_pass']))
    {
        echo'remplissage absent';
    }
    else{
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1"; // Selectionne la table users et la colonne username, qui correspond à l'username rentré
        $statement = $pdo->prepare($query);
        $statement-> execute(
            array(
                'username' => $_POST['username']
            )
            );
            $count = $statement->rowCount();
            if($count >0)
            {
                $result = $statement->fetch(PDO::FETCH_ASSOC);

                if(password_verify($_POST['user_pass'], $result['user_pass'])) {
                    session_start();
                    $_SESSION['username'] = $_POST['username'];
                    $prenomus = ($_POST['username']);
                    echo "<script>alert('Vous êtes connecté $prenomus');
                    window.location.href='product.php'; 
                    </script>";
                }
                else{
                    echo 'arf!';
                    header('location: ./accueil.php');
                }
            }

            else {
                echo 'erf!';
            }
    }
};

?>