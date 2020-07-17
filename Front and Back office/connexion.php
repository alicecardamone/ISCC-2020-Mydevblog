<head>
    <title>Connexion - My Pastry</title>
</head>

<body>
    <div id="ZoneConnexion">
        <form action="verificationCon.php" method="POST">
            <h1>Connexion</h1>

            <label><b>Login</b></label>
            <input type="login" placeholder="Entrer votre login" name="login" required>

            <label><b>Mot De Passe</b></label>
            <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

            <p><a href="back.php?page=2">Tu n'as pas encore de compte ? Clique-ici et inscris toi pour rejoindre notre team</a></p>

            <input type="submit" id='submit' value='LOGIN'>
        </form>
    </div>
</body>