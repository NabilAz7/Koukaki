document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('menu-toggle');
  const menu = document.querySelector('.menu');
  const icon = burger.querySelector('i');
  const links = document.querySelectorAll('.menu li a');

  burger.addEventListener('click', function () {
    burger.classList.toggle('open');
    menu.classList.toggle('menu-active');

    // Icône switch
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
    });
  });
});
