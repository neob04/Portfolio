// Ajout bibliothèque EmailJS
document.addEventListener("DOMContentLoaded", function () {
    emailjs.init("rsgLAfduMNlrNa4ST"); // User ID EmailJS
});


// Envoyer l'email lors de la soumission du formulaire
document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault(); // Empêche le rechargement de la page

    // Récupérer les valeurs du formulaire
    let formData = {
        nom: document.getElementById("nom").value,
        prenom: document.getElementById("prenom").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value
    };

    // Envoyer l'email via EmailJS
    emailjs.send("service_k44dxoa", "template_g6khp0m", formData)
        .then(() => {
            alert("Email envoyé avec succès !");
            document.querySelector("form").reset(); // Réinitialiser le formulaire après l'envoi
        })
        .catch(error => {
            console.error("Erreur EmailJS :", error);
            alert("Erreur lors de l'envoi de l'email.");
        });
});

