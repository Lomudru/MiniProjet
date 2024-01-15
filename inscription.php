<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="utilitaire/inscriptionValidation.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom">
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email">
        <br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp">
        <br>
        <input type="submit" value="S'inscrire">
    </form>
    <a href="index.php">Se connecter</a>
</body>
</html>