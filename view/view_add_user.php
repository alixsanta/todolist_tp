<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>créer son compte</title>
</head>
<body>
    <h3>Créer son compte :</h3>
    <form action="" method="post">
        <p>Saisir le nom :</p>
        <input type="text" name="name_user">
        <p>Saisir le prénom :</p>
        <input type="text" name="first_name_user">
        <p>Saisir le mail :</p>
        <input type="text" name="login_user">
        <p>Saisir le mot de passe :</p>
        <input type="password" name="mdp_user">
        <p><input type="submit" value="Ajouter"></p>
    </form>
    <p id="error"></p>
    <!-- <script src="./asset/script/script2.js"></script> -->


    <h3>Se connecter</h3>
    <form action="" method="post">
        <p>Veuillez saisir votre mail:</p>
        <input type="mail" name="mail_util" id="mail">
        <p>Veuillez saisir votre mot de passe:</p>
        <input type="password" name="mdp_util" id="mdp">
        <p><input type="submit" value="Connexion" name="submit"></p>
    </form>
    <!-- <p id="error"></p>
    <script src="./asset/script/script2.js"></script> -->
</body>
</html>