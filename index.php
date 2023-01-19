<?php
include_once "./src/header.inc.php"

?>
    <picture>
        <source srcset="./asset/cover.png"
                media="(orientation: portrait)">
        <img src="./asset/cover.png" alt="cover">
    </picture>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le 15/12/2022 - 10:17</h2>
            <p>
           

                Mise à jour PHP 8.1.10<br>
            </p>
    
        <?php 
        include_once "./src/connect.inc.php" 
        ?>
    <!--end -->
    <nav>
    <a class="button" href="search.php">
            Rechercher les articles
        </a>
      

    </nav>
    </main>
    <footer>
        <p>&copy; - MIT - <time datetime="2022-12-15">15/12/2022</time></p>
    </footer>
   
</body>
</html>