<head>
    <link rel="stylesheet" type="Text/css" href="style/Back.css">
    <title>Vérification Connexion</title>
</head>

<?php

function connect_to_database()
{
    $servername = "localhost";
    $username = "Summer";
    $password = "2020";
    $databasename = "devblog01";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

$pdo = connect_to_database();

if (!isset($_POST["login"]) || !isset($_POST['password'])) {
    echo "veuillez saisir un login et un mot de passe";
} else {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $user = $pdo->query("SELECT * FROM utilisateurs WHERE login = '$login' and password = '$password'")->fetchAll();
    if (count($user)  == 1) {
        $_SESSION['id'] = $_POST['login'];
        setcookie('id', $_POST['login']);
        header("Location: back.php?page=ajoutarticle");
    } else {
        echo "<a href='back.php?page=connexion'>Mauvais couple identifiant/mot de passe - Réessayer</a>";
    }
} ?>