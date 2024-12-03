<?php
    $pageTitle = "Veille Technologique | Portfolio - BF";
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/head.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/header.php';
?>

<!-- Veille Technologique -->
<section class="veille_techno">
    <h2>Veille Technologique</h2>
    <div class="bloc_veille_techno">
        <img class="img_travaux_veille_techno" src="assets/images/travaux.png" alt="En travaux">
        <p>
            <br>
            Une veille technologique est un processus continu de collecte, d’analyse et de diffusion d’informations concernant les avancées technologiques dans un domaine spécifique.
            Elle permet d’identifier les nouvelles tendances, les innovations, les outils, ou les technologies émergentes susceptibles d’impacter un secteur ou une activité professionnelle.
            <br>
            <br>
            <h4>Objectifs principaux de la veille technologique :</h4>
            <br>
                <li>Anticipation des évolutions : Prévoir les changements pour s'adapter aux nouvelles opportunités ou éviter les menaces</li>
                <li>Prise de décision stratégique : Aider à orienter les choix technologiques, de développement ou d'investissement</li>
                <li>Amélioration de la compétitivité : Permettre aux entreprises ou aux professionnels de rester en avance sur la concurrence</li>
                <li>Innovation et développement : Identifier des idées pour développer de nouveaux produits, services ou processus</li>
            <br>
            <br>
            <h4>Les étapes de la veille technologique :</h4>
            <br>
                <li>Définir les objectifs et le périmètre : Identifier les sujets ou technologies à surveiller</li>
                <li>Rechercher des informations : Utiliser des sources variées comme les publications scientifiques, les forums spécialisés, les blogs, ou les conférences</li>
                <li>Analyser les données collectées : Trier, structurer et interpréter les informations</li>
                <li>Partager les résultats : Diffuser les informations pertinentes aux parties prenantes</li>
            <br>
            <br>
            <p class="sujet_veille">
                <strong>Le sujet que j'ai choisi pour ma veille technologique est le Développement Web.</strong>
                <br>
                <strong>L'outils que j'ai choisi pour développer ma veille est "Feedly".</strong>
            </p>
        </p>
    </div>

    <div class="bloc_secu">
        <h3>Sécurité</h3>
        <p>
            La sécurité en développement logiciel et web concerne les pratiques, outils et techniques permettant de protéger les systèmes, applications, et données contre les menaces telles que les cyberattaques, les failles de sécurité ou les vols d'informations.
            <br>
            <br>
            <h4>Objectifs clés :</h4>
            <br>
                <li>Protéger les données des utilisateurs (intégrité, confidentialité, disponibilité)</li>
                <li>Identifier et corriger les vulnérabilités (ex : injections SQL, XSS, CSRF)</li>
                <li>Respecter les normes et standards de sécurité comme OWASP ou ISO 27001</li>
        </p>
    </div>

    <div class="bloc_reglm">
        <h3>Réglementation</h3>
        <p>
            La réglementation désigne l'ensemble des lois et normes que doivent respecter les développeurs dans leurs projets. Ces règles couvrent la protection des données personnelles, les droits d'auteur, ou encore l'accessibilité numérique.
            <br>
            <br>
            <h4>Objectifs clés :</h4>
            <br>
                <li>Respecter des lois comme le RGPD (Règlement Général sur la Protection des Données)</li>
                <li>S'assurer que les applications soient accessibles (normes WCAG pour les personnes handicapées)</li>
                <li>Gérer les licences des logiciels et frameworks utilisés (open source, propriétaires)</li>
        </p>
    </div>

    <div class="bloc_act_gen">
        <h3>Actualité Générale</h3>
        <p>
        L’actualité générale en veille technologique couvre les évolutions et tendances récentes du secteur numérique. Cela inclut les nouvelles technologies, les mises à jour de frameworks, ou encore les annonces importantes des grandes entreprises du secteur.
        <br>
        <br>
        <h4>Objectifs clés :</h4>
        <br>
            <li>Être au courant des dernières versions des outils de développement (ex : Node.js, PHP)</li>
            <li>Identifier les innovations prometteuses (ex : IA générative ou cloud computing)</li>
            <li>Comprendre l’impact des évolutions sur ton environnement professionnel</li>
        </p>
    </div>
    
    <div class="bloc_ui_ux">
        <h3>UI / UX (Interface Utilisateur / Expérience Utilisateur)</h3>
        <p>
            La UI/UX concerne la conception de l’apparence (UI) et de l’ergonomie (UX) des interfaces des logiciels et applications web.
            <br>
            L’objectif est de rendre les outils attractifs, intuitifs et accessibles pour l’utilisateur final :
            <br>
                <li>UI (User Interface) : Mise en page, couleurs, typographie, animations</li>
                <li>UX (User Experience) : Navigation fluide, simplicité d'utilisation, satisfaction de l'utilisateur</li>
            <br>
            <h4>Objectifs clés :</h4>
                <br>
                <li>Créer des interfaces esthétiques et cohérentes avec les besoins des utilisateurs</li>
                <li>Réduire les frictions et les erreurs d'utilisation grâce à une conception bien pensée</li>
                <li>Tester régulièrement l'expérience utilisateur pour l'améliorer</li>
        </p>
    </div>
</section>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/footer.php';
?>