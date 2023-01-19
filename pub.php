
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP - articles and post</title> 
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    </head>
<body>
    <header>
        <h1>PHP - articles and post</h1>
    </header>
<main>
<div class="form" role="region">
    <?php include_once "./src/traitement.inc.php"?>
    <fieldset>
        <legend>Poster vos publications</legend>
                                
            <form action="" method="post"><!-- get -->
                <label for="titre">Ajoutez un titre</label>
                    <input type="text" name="titre" id="titre" placeholder="Votre titre" autofocus="true">
                    <label for="contenu">Insérer un contenu</label>
                    <textarea name="contenu" id="contenu" placeholder="Contenu"></textarea>
                    <input type="submit" value="Envoyer">
            </form>
                
               
        </fieldset>
        

</div>

</main>
    
<footer>
        <p>&copy; - MIT - 2023-01-05</p>
</footer>
</html>