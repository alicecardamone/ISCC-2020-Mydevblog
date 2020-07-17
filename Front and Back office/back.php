<?php session_start(); ?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>My Pastry - Back office</title>
    <link rel="stylesheet" type="Text/css" href="style/Back.css">
</head>

<body>
    <header>
        <?php include("header_back.php"); ?>
    </header>
    <?php

    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'ajoutarticle') {
            include('ajout_article.php');
        } elseif ($_GET['page'] == 'ajoututilisateur') {
            include('ajout_utilisateur.php');
        } elseif ($_GET['page'] == 'connexion') {
            include('connexion.php');
        } elseif ($_GET['page'] == 'utilisateurs') {
            include('utilisateur.php');
        } elseif ($_GET['page'] == 'supprimer') {
            include('supprimer.php');
        }
    }
    ?>
    <footer>
        <?php include("footer_back.php"); ?>
    </footer>
</body>

</html>