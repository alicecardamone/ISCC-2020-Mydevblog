<head>
    <link rel="stylesheet" type="Text/css" href="style/Back.css">
    <title>Vérification Article</title>
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

if (
    isset($_POST['submit']) && isset($_POST['titre'])
    && isset($_POST['contenu']) && isset($_POST['ingredients'])
    && isset($_POST['recette']) && isset($_POST['extrait'])
) {

    $title = $_POST['titre'];
    $content = $_POST['contenu'];
    $extrait = $_POST['extrait'];
    $ing = $_POST['ingredients'];
    $rec = $_POST['recette'];


    try {
        $sql = $pdo->prepare("INSERT INTO article  (titre, contenu, ingredients, recette, extrait)  VALUES (?,?,?,?,?)");

        $sql->execute([$title, $content, $ing, $rec, $extrait]);

        echo "<h4>Article ajoutée au site</h4>";
        echo "<a href='back.php?page=ajoutarticle'>Nouvel Article</a>";
    } catch (PDOException $e) {
        echo "Erreur d'ajout" . $e->getMessage();
    }
} ?>