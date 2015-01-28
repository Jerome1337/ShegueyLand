<!doctype html>
<html lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "gallerie";
        include('commons/head.php');
        include('commons/function.php'); ?>
        <title>SHEGUEYLAND | Le Mur des Sheguey</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        
        
        <header class="galleryOptions">
            <h2>ShegueyWall</h2>
            <form action="#" class="formOptions">
                <input type="checkbox" value="images" class="mediaContent" id="images"/><label for="images">Images</label>
                <input type="checkbox" value="videos" class="mediaContent" id="videos"/><label for="videos">Vidéos</label>
                <input type="radio" value="recent" class="orderBy" id="recent" name="orderList"><label for="recent">recent</label>
                <input type="radio" value="liked" class="orderBy" id="liked" name="orderList"><label for="liked">liked</label>
            </form>
        </header>
        
        <div class="content shegueyGallery">
            <div class="row js-shegueyWall">

            </div>
            <div class="button getMoreSheg">
                    Afficher plus de SHEGUEY
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
        <script>
            $(document).ready(function() {
                loadGallery("both", "DESC"); // Chargement de la gallerie au 1er chargement
            });
        </script>
    </body>
</html>