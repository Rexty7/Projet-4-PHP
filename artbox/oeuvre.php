
<?php 
    include("header.php"); 
    include("oeuvres.php");
?>
    <!-- meme principe que dans l'index mais sans la boucle et en allant chercher cette fois dans l'URL avec le $_GET -->
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
                                    <!-- Je fais -1 pour recupérer l'indice de l'oeuvre -->
            <img src=<?php echo $oeuvres[$_GET["id"]-1]['image']; ?>>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$_GET["id"]-1]['title']; ?></h1>
            <p class="description"><?php echo $oeuvres[$_GET["id"]-1]['author']; ?></p>
            <p class="description-complete">
                <?php echo $oeuvres[$_GET["id"]-1]['description']; ?>
            </p>
        </div>
    </article>

<?php 
    include("footer.php"); 
?>
