document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche l'envoi du formulaire pour le moment

        // Récupère les valeurs des champs
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        // Validation simple des champs
        if (name === '' || email === '' || message === '') {
            formMessage.textContent = 'Tous les champs sont obligatoires.';
            formMessage.style.color = 'red';
            return;
        }

        // Affiche un message de confirmation
        formMessage.textContent = 'Merci pour votre message, ' + name + '. Nous vous répondrons bientôt !';
        formMessage.style.color = 'green';

        // Remet le formulaire à zéro (facultatif)
        form.reset();
    });
});
