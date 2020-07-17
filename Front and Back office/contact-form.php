<head>
    <meta charset="utf-8">
    <title>My Pastry - Back office</title>
    <link rel="stylesheet" type="Text/css" href="style/Back.css">
</head>

<?php
if (isset($_POST["submit"]) && (!empty($_POST['name']) || !empty($_POST['email']) != "" || !empty($_POST['Message'] != ""))) {
    echo "<h4> Voici les informations rentrées dans le formulaire contact : ";
    echo '<p> Prénom : ' . $_POST['name'] . '</p>';
    echo '<p> Email : ' . $_POST['email'] . '</p>';
    echo '<p> Message : ' . $_POST['Message'] . '</p>';
    echo "<p>Merci pour votre prise de contact, nous vous répondrons dans les plus briefs délais.</p>";
    echo "<a href='front.php?page=accueil'>Accueil</a>";
} else {
    echo "Aucunes données reçues.";
    echo "<a href='front.php?page=contact'>Contact</a>";
} ?>