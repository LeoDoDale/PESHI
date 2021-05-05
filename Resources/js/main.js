$(() => {
  animeScroll();
});

const target = document.querySelectorAll('[data-anime]');

const animationClass = 'animate';

function animeScroll() {
  const windowTop = window.pageYOffset + (window.innerHeight * 3.5) / 4;
  target.forEach((element) => {
    if (windowTop > element.offsetTop) {
      element.classList.add(animationClass);
    } else {
      element.classList.remove(animationClass);
    }
  });
}

window.addEventListener('scroll', () => {
  animeScroll();
});

$('.loop').owlCarousel({
  center: true,
  items: 1,
  loop: true,
  margin: 10,
  dots: false,
  responsive: {
    600: {
      items: 1,
    },
  },
});
