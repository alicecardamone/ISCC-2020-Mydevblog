<head>
    <title>Accueil - My PAstry</title>
</head>

<h2>Accueil</h2>
<div id="Body">
    <h3>Qui suis-je ?</h3>
    <p>
        Bonjour à vous, passionnée de pâtisserie depuis ma tendre
        <br> enfance, j'ai décidée de vous partager tous mes secrets et
        <br> meilleurs recettes pour faire de vous le prochain Cyril Lignac.
        <br> Si vous avez la moindre question, n'hesite pas à m'envoyer un
        <br> message, je serais ravie de vous répondre avec grand plaisir !
        <br> De plus, vous pourrez rajouter vos recettes grâce au lien ci-dessous,
        <br> qui vous permet de vous connecter afin de partager ensemble la pâtisserie.
        <br><a href="back.php?page=connexion">Connecte-toi</a>
        Ou <a href="back.php?page=ajoututilisateur">Inscris-toi</a>
    </p>

    <h4>
        À vos fouets et pâtissez !
        <br> Alice Cardamone
    </h4>
</div>

<img src="image/patisserie.jpg" alt="logo">

<h3>Nos articles : </h3>
<?php
$pdo = connect_to_database();
$articles = $pdo->query('SELECT * FROM article ORDER BY date_time_publication DESC LIMIT 5');
$articles = $articles->fetchAll();

foreach ($articles as $article) {
    echo "<p id='accueil'><a href=\"front.php?page=article&article=" . $article["id"] . "\">" . $article["titre"] . "</a><br>" . $article["extrait"] . "</p>";
}
?>