// HEADER
// En tete actifs //
document.querySelectorAll('header nav ul li a').forEach(link => {
  if (link.pathname === window.location.pathname) {
      link.classList.add('active');
    }
});

// Sélectionner tous les liens des onglets
const tabs = document.querySelectorAll('.tab');

// Ajouter un écouteur d'événements pour chaque onglet
tabs.forEach(tab => {
  tab.addEventListener('click', function(event) {
      // Retirer la classe 'active' de tous les onglets
      tabs.forEach(tab => tab.classList.remove('active'));
      
      // Ajouter la classe 'active' à l'onglet cliqué
      tab.classList.add('active');
  });
});

