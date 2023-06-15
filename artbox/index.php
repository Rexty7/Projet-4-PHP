
    <?php 
    // Factorisation du code avec la fonction include qui inclut et éxecute le fichier spécifié
        include("header.php"); 
    // Inclusion de notre base de données oeuvres pour pouvoir l'utiliser 
        include("oeuvres.php");
    ?>

    <div id="liste-oeuvres">
        <?php
        // Boucle for avec indice, indice = 0 tant que i est plus petit que count(oeuvres) = (longueur du tableau), faire +1 a chaque tour.
        // Il crée un article a chaque tour jusqu'a arriver a la derniere oeuvre 
            for ($i = 0; $i < count($oeuvres); $i++): ?>
            <article class="oeuvre">
                                        <!-- echo $oeuvres[$i]['id'] qui permet d'aller chercher l'id dans notre base de donnée -->
                <a href="oeuvre.php?id=<?php echo $oeuvres[$i]['id']; ?>">
                                        <!-- echo $oeuvres[$i]['image'] qui permet d'aller chercher l'url dans notre base de donnée -->
                    <img src=<?php echo $oeuvres[$i]['image']; ?>>
                                        <!-- echo $oeuvres[$i]['title'] qui permet d'aller chercher le titre dans notre base de donnée -->
                    <h2><?php echo $oeuvres[$i]['title']; ?></h2>
                                        <!-- echo $oeuvres[$i]['author'] qui permet d'aller chercher l'auteur dans notre base de donnée -->
                    <p class="description"><?php echo $oeuvres[$i]['author']; ?></p>
                </a>
            </article>
        <?php endfor; ?> 
    </div>

    <?php 
    // Factorisation du code avec la fonction include qui inclut et éxecute le fichier spécifié
        include("footer.php");
    ?>
