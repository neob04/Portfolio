<?php
    $pageTitle = "Contact | Portfolio - BF";
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/head.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/header.php';
?>

<!-- Contact -> A TRAVAILLER !!!!! -->
<section class="contact">
    <h2>Contact</h2>
    <div class="bloc_contact">
        <form action="" method="post">
            <div class="form_group">
                <label for="label_nom">Nom</label>
                <input type="text" class="input_nom" id="nom" name="nom" placeholder="Saisir votre nom">
            </div>

            <div class="form_group">
                <label for="label_prenom">Prénom</label>
                <input type="text" class="input_prenom" id="prenom" name="prenom" placeholder="Saisir votre prénom">
            </div>
                         
            <div class="form_group">
                <label for="label_email">Email</label>
                <input type="text" class="input_email" id="email" name="email" placeholder="Saisir votre email">
            </div>

            <div class="form_group">
                <label for="label_message">Message</label>
                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Saisir le contenu du message"></textarea>
            </div>
            
            <div class="bloc_boutons_contact">
                <button type="submit" class="boutons_contact" value="mailform" name="submit">Envoyer</button>
            </div>
        </form>
    </div>
</section>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/Portfolio/inc/footer.php';
?>