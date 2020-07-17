<head>
    <title>Ajout Article - My Pastry</title>
</head>

<body>
    <div id="table-scroll">
        <form action="verificationArt.php" method="POST">
            <h1>Ajout Article</h1>

            <label><b>Nom de l'article</b></label>
            <input type="text" placeholder="Nom" name="titre" required><br>

            <label><b>Contenu de l'article</b></label>
            <br><textarea name="contenu" rows="40" cols="75" placeholder="Ecrire le contenu de l'article"></textarea><br>

            <Label><b>Ingrédients</b></label>
            <br><textarea name="ingredients" rows=5 cols=20 placeholder="Placer les ingrédients ici"></textarea><br>

            <Label><b>Recette</b></label>
            <br><textarea name="recette" rows=20 cols=40 placeholder="Placer votre recette ici"></textarea><br>

            <Label><b>Extrait de votre article</b></label>
            <br><textarea name="extrait" rows=10 cols=30 placeholder="Placer un extrait de votre article"></textarea>

            <input type="submit" id='submit' value='LOGIN' name="submit">

        </form>
    </div>
</body>