// HEADER
// En tete actifs //
const navLinks = document.querySelectorAll('header nav ul li a');

function updateActiveNavLink() {
  const currentPath = window.location.pathname;
  const currentHash = window.location.hash;

  navLinks.forEach(link => {
    link.classList.remove('active');

    if (link.pathname !== currentPath) {
      return;
    }

    if (link.hash) {
      if (link.hash === currentHash) {
        link.classList.add('active');
      }
      return;
    }

    if (!currentHash) {
      link.classList.add('active');
    }
  });
}

updateActiveNavLink();
window.addEventListener('hashchange', updateActiveNavLink);

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

// Menu BTS SIO: un tap mobile ouvre/ferme directement le sous-menu.
const dropdownMenus = document.querySelectorAll('.menu-deroulant');
const isMobileMenu = () => window.matchMedia('(max-width: 768px)').matches;

dropdownMenus.forEach(menu => {
  menu.addEventListener('toggle', () => {
    if (!menu.open) {
      return;
    }

    dropdownMenus.forEach(otherMenu => {
      if (otherMenu !== menu) {
        otherMenu.open = false;
      }
    });
  });

  const summary = menu.querySelector('summary');
  const subLinks = menu.querySelectorAll('.sous-menu a');

  if (!summary) {
    return;
  }

  summary.addEventListener('click', event => {
    if (!isMobileMenu()) {
      return;
    }

    event.preventDefault();
    const willOpen = !menu.open;

    dropdownMenus.forEach(otherMenu => {
      if (otherMenu !== menu) {
        otherMenu.open = false;
      }
    });

    menu.open = willOpen;
  });

  subLinks.forEach(link => {
    link.addEventListener('click', () => {
      menu.open = false;
    });
  });
});

document.addEventListener('click', event => {
  if (!event.target.closest('.menu-deroulant')) {
    dropdownMenus.forEach(menu => {
      menu.open = false;
    });
  }
});

document.addEventListener('keydown', event => {
  if (event.key === 'Escape') {
    dropdownMenus.forEach(menu => {
      menu.open = false;
    });
  }
});

