<?php
    $pageTitle = "Réalisations | Portfolio - BF";
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/head.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/header.php';
?>

<!-- Réalisations -->
<section class="realisations">
    <h2>Mes Réalisations !</h2>
    <div class="bloc_prj1">
        <!-- Une image, un nom, une courte description (option), techno utilisé, redirection vers la page ou github projet (si en ligne) -->
        <div class="gauche_desc_prj1">
            <h3>Portfolio</h3>
            <p>
                La création de ce Portfolio !
                <br>
                <br>
                <img class="screen_real1" src="assets/docs/realisations/screen_real1.png" alt="Page d'accueil - Portfolio">
                <br>
                <br>
            </p>
        </div>
        <div class="droite_desc_prj1">
            <div class="liens_prj1">
                <button class="boutons_prj1" onclick="window.location.href='http://localhost/Portfolio/index.php';"> Consulter mon site </button> 
                <button class="boutons_prj1" onclick="window.location.href='https://github.com/neob04/Portfolio';"> Lien GitHub </button>
            </div>
            <div class="lang_prj1">
                <p>
                    <br>
                    <br>
                    <i>PHP | CSS3 | Javascript</i>
                    <br>
                    <br>
                </p>
            </div>
        </div>
    </div>

    <div class="bloc_prj_2">
        <h3>Projet d'introduction au responsive - ChatGPT</h3>
        <p>
            Desc courte, une image, etc... + JOINDRE BOUTONS vers github au minumum
            <br>
            <br>
            <i>HTML5 | CSS3</i>
        </p>
    </div>

    <div class="bloc_prj_3">
        <h3>Injection SQL</h3>
        <p>
            Projet réaliser dans le but de simuler une attaque par Injection SQL sur un formulaire de connexion factisse lié à une base de données en local.
            <br>
            <br>
            <i>PHP</i>
        </p>
    </div>

    <div class="bloc_prj_4">
        <h3>Gestion de Tickets - CAPS</h3>
        <p>
            Gérer les demandes clients sur la plateforme CAPS NOW :
        </p>
        <ul>
            <li>Création de droits</li>
            <li>Modification de droits</li>
            <li>Réinitialisation de mot de passe</li>
            <li>Supression de droits</li>
        </ul>
    </div>

    <div class="bloc_prj_5">
        <h3>Outils Excel - CAPS</h3>
        <p>
            Création d'un outils sur Excel qui permet d'analyser et de comparer les données d'un formulaire de sécurité et de la plateforme
            d'habilitations du Groupe, afin de mettre à jour les informations sur la plateforme d'habilitations du Groupe.
            <br>
            <br>
            <i>VBA</i>
        </p>
    </div>

    <div class="bloc_prj_6">
        <h3>Tableau de bord de l'équipe - CAPS</h3>
        <p>
            MAJ d'un tableau de bord mensuel sur les chiffres de l'équipe aussi bien sur la partie habilitation que sur la partie sécurité (Dossiers OSAL).
            <br>
            <br>
            <i>Exctraction de données via CAPS Habilitations et CAPS NOW</i>
        </p>
    </div>
</section>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/footer.php';
?>
