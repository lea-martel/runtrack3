<?php
session_start();
if (isset($_POST['submit'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : NULL ;
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL ; 
    $password = htmlentities(trim($_POST['password']));
    $email = htmlentities(trim($_POST['email']));

    if ($nom && $prenom && $password && $email) {
            //CRYPTAGE MDP
            $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 15));

            $db = mysqli_connect('localhost', 'root', '') or die('Erreur');
            mysqli_select_db($db, 'utilisateurs');

            $request = " SELECT prenom FROM utilisateurs WHERE prenom = '" . $_POST['prenom'] . "' ";
            $query = mysqli_query($db, $request);
            $test_login = mysqli_fetch_array($query);

            if (!empty($test_login))
            {
            echo "Ce prénom existe déjà ! Veuillez en choisir un autre.";
            }else{
                $query = mysqli_query($db, "INSERT INTO utilisateurs (prenom, nom, password, email) VALUES('$prenom','$nom' '$password','$email');");

                die("Inscription terminée. <a href='connexion.php'>Connectez-vous</a>.");
            }

        } else {
            echo "Les mots de passes doivent être identiques";
        }
    } else {
        echo "Veuillez saisir tous les champs";
    }
?>


<!DOCTYPE html
<html>
<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<main>
    <h1>Inscription</h1><br/>
    <form method="post" action="inscription.php" id="form">
        <p>Nom</p>
        <input class="input" type="text" name="nom">
        <p>Prénom</p>
        <input class="input" type="text" name="prenom">
        <p>Mot de passe</p>
        <input class="input" type="password" name="password">
        <p>email</p>
        <input class="input" type="text" name="email">
        <input class="input" type="submit" name="submit" value="Valider">
    </form>
</main>
<script src="script.js"></script>
</body>
</html>