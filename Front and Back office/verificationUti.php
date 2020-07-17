<head>
    <meta charset="utf-8">
    <title>My Pastry - Back office</title>
    <link rel="stylesheet" type="Text/css" href="style/Back.css">
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

if (isset($_POST['submit']) && isset($_POST['login']) && isset($_POST['password'])) {

    $login = $_POST['login'];
    $password = $_POST['password'];
    try {
        $sql = $pdo->prepare("INSERT INTO utilisateurs (login, password) VALUES (:login,:password) ");
        $sql->bindValue(':login', $login, PDO::PARAM_STR);
        $sql->bindValue(':password', $password, PDO::PARAM_STR);

        $sql->execute();
        echo "<h4>Utilisateur ajoutée avec succès</h4> ";
        echo "<h4><a href='back.php?page=ajoutarticle'>Ajout Article</a></h4>";
    } catch (PDOException $e) {
        echo "Erreur d'ajout" . $e->getMessage();
    }
} ?>