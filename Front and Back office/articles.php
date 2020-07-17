<head>
    <title>Articles-My Pastry</title>
</head>

<h2>Articles</h2>

<?php
$pdo = connect_to_database();
$articles = $pdo->query('SELECT * FROM article ORDER BY date_time_publication DESC ');
$articles = $articles->fetchAll();

foreach ($articles as $article) {
    echo "<h4><a id='articles' href=\"front.php?page=article&article=" . $article["id"] . "\">" . $article["titre"] . " ( " . $article['date_time_publication'] . " ) " . "</a></h4>";
}

?>