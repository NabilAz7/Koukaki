window.addEventListener('scroll', () => {
  const parallaxSection = document.querySelector('#place');
  const cloudTop = document.querySelector('.cloud__top');
  const cloudBottom = document.querySelector('.cloud__bottom');

  if (parallaxSection && cloudTop && cloudBottom) {
    const sectionRect = parallaxSection.getBoundingClientRect();
    const sectionVisible =
      sectionRect.top <= window.innerHeight && sectionRect.bottom >= 0;

    if (sectionVisible && sectionRect.top <= window.innerHeight) {
      // Scroll relatif à l'entrée dans la fenêtre
      const relativeScroll = window.innerHeight - sectionRect.top;

      // Déplacement limité à 300px max
      const maxMove = 300;
      const offsetTop = Math.min(relativeScroll * 0.4, maxMove);
      const offsetBottom = Math.min(relativeScroll * 0.5, maxMove);

      cloudTop.style.transform = `translateX(${-offsetTop}px)`;
      cloudBottom.style.transform = `translateX(${-offsetBottom}px)`;
    }
  }
});

// Javascript animation des sections
// Lorsque la page est complètement chargée
window.addEventListener('load', () => {
  const logo = document.querySelector('img.banner__logo');

  if (logo) {
    logo.addEventListener('animationend', (event) => {
      if (
        event.animationName === 'fadeInUp' &&
        !logo.classList.contains('floating')
      ) {
        logo.classList.add('floating');
      }
    });
  }
});

// Animation des h2 a chaque passage sur la section

document.addEventListener('DOMContentLoaded', () => {
  const title = document.querySelector('.story__title');

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Ajoute la classe pour déclencher l'animation
          title.classList.add('animate');
        } else {
          // Retire la classe pour réinitialiser quand le titre sort de l'écran
          title.classList.remove('animate');
        }
      });
    },
    {
      threshold: 0.5, // déclenche quand 50% du titre est visible
    }
  );

  observer.observe(title);
});

document.addEventListener('DOMContentLoaded', () => {
  // Animation pour le titre Studio Koukaki
  const koukakiTitle = document.querySelector('.koukaki__titre');

  const koukakiObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          koukakiTitle.classList.add('animate');
        } else {
          koukakiTitle.classList.remove('animate');
        }
      });
    },
    {
      threshold: 0.5,
    }
  );

  koukakiObserver.observe(koukakiTitle);
});

document.addEventListener('DOMContentLoaded', () => {
  // Animation pour le titre Story Title
  const storyTitle = document.querySelector('.story__title');

  const storyObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Ajoute la classe 'animate' quand l'élément entre dans la vue
          storyTitle.classList.add('animate');
        } else {
          // Retire la classe 'animate' quand l'élément sort de la vue
          storyTitle.classList.remove('animate');
        }
      });
    },
    {
      threshold: 0.5, // L'élément doit être à 50% visible pour que l'animation soit déclenchée
    }
  );

  storyObserver.observe(storyTitle);
});
