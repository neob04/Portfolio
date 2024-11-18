<?php
    $pageTitle = "Accueil | Porfolio - BF";
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/head.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/header.php';
?>

<!-- Accueil -->
<section class="accueil">
    <h2>Accueil</h2>
    <div class="bloc_accueil">
        <img src="assets/images/photo_accueil_portfolio.jpg" alt="Photo Accueil" class="photo_accueil">
        <div class="desc_etudiant">
            <div class="desc_accueil">
                <h3>Bienvenue sur mon Portfolio !</h3>
                <p>
                <br>
                Je suis Baptiste Faouën, étudiant en BTS SIO SLAM.
                <br>
                Passionné par le développement, ce portfolio présente mes compétences et projets réalisés durant ma formation.
                <br>
                <br>
                Explorez mes réalisations et contactez-moi pour toute collaboration ou question : </p>
            </div>
            <div class="liens_accueil">
                 <button class="boutons_accueil" onclick="window.location.href='http://localhost/Portfolio/assets/docs/cv_bf.pdf';"> Consulter mon CV </button> 
                 <button class="boutons_accueil" onclick="window.location.href='http://localhost/Portfolio/contact.php';"> Me contacter </button>
            </div>
        </div></>
    </div>
</section>
    
<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/footer.php';
?>
