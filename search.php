<!-- header -->
<?php
    include_once "./src/header.inc.php";
?>
<body>
<main>

<!-- formulaire de recherche-->
<div class="form" role="region">
    <fieldset>
        <legend>Rechercher un article</legend>
        <!-- connexion a la BDD -->
        <?php
            $bdd = new PDO('mysql:host=localhost;dbname=article;charset=utf8','root','');
            $_article = $bdd->query('SELECT titre, contenu, date_modification FROM posts ORDER BY id ASC LIMIT 1');
    //tester la recherche
    if(isset($_GET['query']) AND !empty($_GET['query'])){
        $_query = htmlspecialchars($_GET['query']);
        $_article = $bdd->query('SELECT titre, contenu, date_modification FROM posts     WHERE titre LIKE "%'.$_query.'%" ORDER BY id DESC');
        
    }
    ?>  
                        
            <form action="" method="get"><!-- get -->
                <label for="titre">Faîtes votre recherche</label>
                    <input type="search" name="query" placeholder="Recherche..." autofocus>
                    <input type="submit" value="Envoyer">
            </form>  
                
                
        </fieldset>
        </div>
        <!-- condition and iteration -->
        <?php if($_article->rowCount() > 0){?>

    <article>
    <?php while($data = $_article->fetch()){?>

    <h2>
        <?= $data['titre']?>
    </h2>
    <p>
        <?= $data["contenu"]?><br>
        <time datetime="<?=$data['date_modification']?>">
            <strong>
                Date de modifgication : 
                <?=$data['date_modification']?>
            </strong>
        </time>
    </p>

        <?php }?>
    <?php }else {?>
            <p class="warning"> Aucun réseultat pour <?= $_query ?>....</p>
    <?php } ?>
 </article>
        <!-- article  -->
                <article>
                
                <h2>
                    HTML 5                </h2>
                <p>
                    Le HyperText Markup Language, généralement abrégé HTML ou, 
                    dans sa dernière version, HTML5, est le langage de balisage 
                    conçu pour représenter les pages web<br>
                    <time datetime="2022-10-14 12:28:55">
                        <strong>
                            Date de modifgication : 
                            2022-10-14 12:28:55                        </strong>
                    </time>
                </p>

                                                   
                
            </article>
       <!-- end template --> 
    <nav>
        <a class="button" href="index.php">Revenir aux articles</a>
    </nav>
            
</main>
    <footer>
        <p>&copy; - MIT - <time 
        datetime="<?= $_datetime ?>">
        <?= $_date_php ?>
        </time></p>
    </footer>
</html>