<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/Front.css">
</head>

<body>
    <header>
        <?php include("header_front.php"); ?>
    </header>

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
    if (isset($_GET['page'])) {
        if ($_GET['page'] == "accueil") {
            include('accueil.php');
        } elseif ($_GET['page'] == "articles") {
            include('articles.php');
        } elseif ($_GET['page'] == "article") {
            include('article.php');
        } elseif ($_GET['page'] == "contact") {
            include('contact.php');
        } elseif ($_GET['page'] == "connexion") {
            header('location: back.php?page=connexion');
        } else {
            include('accueil.php');
        }
    } else {
        include('accueil.php');
    } ?>
    <footer>
        <?php include("footer_front.php"); ?>
    </footer>
</body>

</html>