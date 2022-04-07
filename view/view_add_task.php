<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Ajouter une tache</title>
</head>
<body>
    <h3>j'ajoute une tache :</h3>
    <form action="" method="post">
        <p>Nom :</p>
        <input type="text" name="name_task">
        <p>Contenu :</p>
        <textarea type="text" name="content_task"></textarea>
        <p>date :</p>
        <input type="date" name="date_task">
        <p><input type="submit" value="Ajouter"></p>
        <p>accomplie ?</p>
        <input type="checkbox" name="validate">
    </form>
    <p id="error"></p>
    <!-- <script src="./asset/script/script2.js"></script> -->
</body>
</html>