<!doctype html>
<html lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "gallerie";
        $activeMenuGallerie = "activeMenu";
        include('commons/head.php');
        include('commons/function.php'); ?>
        <title>SHEGUEYLAND | Le Mur des Sheguey</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        
        
        <header class="header galleryOptions">
            <h2>Le Mur des Sheguey</h2>
            <form action="#" class="formOptions">
                <fieldset class="galleryOption">
                <legend>Paramétrer les images</legend>
                    <div class="field mediaType">
                        <input type="checkbox" value="images" class="mediaContent" id="images"/><label for="images">Images</label>
                        <input type="checkbox" value="videos" class="mediaContent" id="videos"/><label for="videos">Vidéos</label>
                    </div>

                    <div class="orderPicsBy">
                        <h4>Trier par</h4>
                        <div class="field select">
                            <input type="radio" value="recent" class="orderBy" id="recent" name="orderList"/><label class="orderBy" for="recent">Nouveautés</label>
                            <input type="radio" value="liked" class="orderBy" id="liked" name="orderList"/><label class="orderBy" for="liked">Votes</label>
                        </div>
                    </div>
                </fieldset>
            </form>
        </header>
        
        <div class="content shegueyGallery">

        <h3 class="title3">Pour apparaitre sur le mur des sheguey, partage ta photo sur instagram avec le tag <strong>#SHEGUEY<b>LAND</b></strong></h3>
        <h3 class="title3">Partage ton cri "SHEGUEYYY" sur instagram VIDEO avec le tag <strong>#SHEGUEY<b>LAND</b></strong></h3>

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
                loadGallery("both", "recent", "8"); // Chargement de la gallerie au 1er chargement
                $('.mediaContent').prop('checked', true); // Coche les 2 case si non defini
            });
        </script>
    </body>
</html>