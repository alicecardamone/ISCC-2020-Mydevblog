<head>
    <title>Ajout Utilisateur - My Pastry</title>
</head>

<body>
    <div id="ZoneUtilisateur">
        <form action="verificationUti.php" method="post">
            <h1>Ajout d'Utilisateur</h1>

            <label><b>Nom de l'utilisateur</b></label>
            <input type="text" placeholder=" Entrer votre Nom" name="name" required>

            <label><b>Login</b></label>
            <input type="text" placeholder="Entrer votre login" name="login" required>

            <label><b>Mot de passe</b></label>
            <input id="password" type="password" name="password" placeholder="Votre mot de passe">
            <input type="submit" id='submit' name='submit' value='LOGIN'>

        </form>
    </div>
</body>