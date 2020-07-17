<html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Utilisateurs - My Pastry</title>
    <link rel="stylesheet" type="Text/css" href="Back.css">
</head>

<body>
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

    $users = $pdo->query("SELECT * FROM utilisateurs");
    foreach ($users as $user) {
        echo "<h3>" . $user['login'] . "<a href='back.php?page=supprimer&id=" . $user['id'] . "'>Supprimer</a></h3>";
    } ?>