document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('menu-toggle');
  const menu = document.querySelector('.menu');
  const nav = document.querySelector('.main-navigation'); // Sélectionne la navigation
  const icon = burger.querySelector('i');
  const links = document.querySelectorAll('.menu li a');

  // Lorsque l'icône du burger est cliquée
  burger.addEventListener('click', function () {
    // Basculer l'état du menu
    menu.classList.toggle('menu-active');
    burger.classList.toggle('open');

    // Vérifier si le menu est ouvert ou fermé
    if (menu.classList.contains('menu-active')) {
      // Si le menu est ouvert, rendre la navigation fixe
      nav.style.position = 'fixed'; // Applique la position fixe à la navigation

      nav.style.width = '100%'; // Fixe la largeur de la navigation à 100%
      nav.style.zIndex = '1000'; // S'assurer que la navigation est au-dessus des autres éléments
    } else {
      // Si le menu est fermé, remettre la navigation à sa position initiale
      nav.style.position = ''; // Retirer la position fixe (retour à son état normal)
      nav.style.width = ''; // Retirer la largeur fixée
      nav.style.zIndex = ''; // Retirer le z-index pour revenir au comportement initial
    }

    // Changer l'icône du burger
    if (burger.classList.contains('open')) {
      icon.classList.remove('fa-bars');
      icon.classList.add('fa-xmark');
    } else {
      icon.classList.remove('fa-xmark');
      icon.classList.add('fa-bars');
    }
  });

  // Fermer le menu au clic sur un lien
  links.forEach((link) => {
    link.addEventListener('click', () => {
      menu.classList.remove('menu-active');
      burger.classList.remove('open');
      icon.classList.remove('fa-xmark');
      icon.classList.add('fa-bars');

      // Remettre la position par défaut de la navigation lorsque le menu est fermé
      nav.style.position = ''; // Retirer la position fixe
      nav.style.top = ''; // Retirer la position "top"
      nav.style.left = ''; // Retirer la position "left"
      nav.style.width = ''; // Retirer la largeur fixée
      nav.style.zIndex = ''; // Retirer le z-index
    });
  });
});
