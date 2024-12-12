<?php
    $pageTitle = "Projets | Portfolio - BF";
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/head.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/header.php';
?>

<!-- Projets -->
<section class="projets">
    <h2>My Watching Companion (client léger)</h2>
    <div class="bloc_leger">
        <h3>Innover</h3>
        <div class="desc_leger">   
            <div class="bloc_desc_leger_chrg">
                <p>
                    <br>
                    Le projet My Watching Companion consiste en la création d’une application web permettant aux utilisateurs de gérer leurs listes de visionnage de séries, films, de lecture de livres et autres formats.
                    <br>
                    L’application vise à offrir un espace personnalisé où chaque utilisateur peut enregistrer, classer et retrouver facilement ses contenus culturels préférés, tout en obtenant des recommandations basées sur ses goûts.
                </p>
            </div>

            <div class="bloc_bouton_leger_chrg">
                <button class="bouton_leger_chrg" onclick="window.location.href='https://docs.google.com/document/d/1m0P90xistFcKZ_A3ZnCf4LTGHMBi5GH1EAAwYwyQr2s/edit?tab=t.0#heading=h.p2xdgdsf0dye';">Voir le cahier des charges</button> 
            </div>  
        </div>

        <h3>Les premières images du Projet (en exclusivité)</h3>
        <div class="bloc_screen_leger">
            <p>
                <br>
                Page d'Accueil - Partie 1 :
                <br>
                <br>
                    <img class="screen_leger" src="assets/docs/projet_1/accueil_1.png" alt="Page d'Accueil du site">
                <br>
                <br>
                Page d'Accueil - Partie 2 :
                <br>
                <br>
                    <img class="screen_leger" src="assets/docs/projet_1/accueil_2.png" alt="Suite Page d'Accueil du site">
                <br>
                <br>
                Page de Connexion :
                <br>
                <br>
                    <img class="screen_leger" src="assets/docs/projet_1/connexion.png" alt="Page de connexion du site">
                <br>
                <br>
                Page d'Inscription:
                <br>
                <br>
                    <img class="screen_leger" src="assets/docs/projet_1/inscription.png" alt="Page d'inscription du site">
                <br>
                <br>
                Maquettes Figma :
                <br>
                <br>
                    <img class="screen_leger" src="assets/docs/projet_1/figma.png" alt="Maquettes Figma du site">
                <br>
                <br>
            </p>
        </div>
<!-- A finir -->
        <h3 class="h3_liens_leger">Les liens utiles du client léger :</h3>
        <div class="bloc_boutons_leger">
            <button class="boutons_leger" onclick="window.location.href='';">Voir notre site</button>
            <button class="boutons_leger" onclick="window.location.href='https://github.com/My-watching-Companion/my-watching-companion';">Lien GitHub</button>
        </div>
    </div>
    
    
    <h2 class="h2_lourd">Gestion de Stock (client lourd)</h2>
    <div class="bloc_contact">
        <img class="img_travaux" src="assets/images/travaux.png" alt="En travaux">
    </div>
    
    <div class="bloc_lourd">
        <h3>Cahier des charges</h3>
        <p>Description du projet.</p>
    </div>
</section>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/footer.php';
?>