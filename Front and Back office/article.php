<?php
$pdo = connect_to_database();

try {
    if (isset($_GET['article'])) {

        $id = $_GET['article'];
        $article = $pdo->query("SELECT * FROM article WHERE id=$id");
        $article = $article->fetchAll();

        if (count($article) == 1) {
            echo "<h3>" . $article[0]['titre'] . "</h3>";
            echo "<h4>Histoire</h4><p id='contenu'>" . $article[0]['contenu'] . "</p>";
            echo "<h4>Ingrédients</h4><p id='ingredients'>" . $article[0]['ingredients'] . "</p>";
            echo "<h4>Recette</h4><p id='recette'>" . $article[0]['recette'] . "</p>";
            echo "<h9>" . $article[0]['date_time_publication'] . "</h9>";
        }
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
