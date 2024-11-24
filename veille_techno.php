<?php
    $pageTitle = "Veille Technologique | Portfolio - BF";
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/head.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/header.php';
?>

<!-- Veille Technologique -->
<section class="veille_techno">
    <h2>Veille Technologique</h2>
    <div class="bloc_contact">
        <img class="img_travaux_veille_techno" src="assets/images/travaux.png" alt="En travaux">
    </div>

    <div class="bloc_secu">
        <h3>Sécurité</h3>
        <p>
            Description de la veille 1. Le mieux est de choisir des sites liés à nos 2 projets de fin d'année.
            Peut choisir "medium", "getpocket" par ex ou autre.
            <br>
            Choix eventuel de "Pocket" ou "Feedly" pour la plateforme. Le choix du sujet reste à déterminer.
        </p>
    </div>

    <div class="bloc_reglm">
        <h3>Réglementation</h3>
        <p>Description de la veille.</p>
    </div>

    <div class="bloc_act_gen">
        <h3>Actualité Générale</h3>
        <p>Description de la veille.</p>
    </div>
    
    <div class="bloc_ui_ux">
        <h3>UI / UX (SLAM)</h3>
        <p>Description de la veille.</p>
    </div>
</section>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/footer.php';
?>