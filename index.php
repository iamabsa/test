<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page de test</title>
</head>
<body>
    <h1>My first page !</h1>
    <form action="traitement.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" placeholder="Votre nom" id="name" name="name"><br><br>

        <label for="email">Email :</label>
        <input type="email" placeholder="Votre Email" id="email" name="email"><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>