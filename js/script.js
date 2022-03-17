const btnMenuMobile = document.querySelector('.navbar-toggler')
const iconeMobile = document.querySelector('.icone-menu-mobile')
btnMenuMobile.addEventListener('click', function () {
  iconeMobile.classList.toggle('ativo')
})

const caroussel = document.querySelector('.caroucel');
//É mobile first então vai mostrar 1 slide com a menor resolução
new Glider(caroussel,{
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  arrows:{
    prev: ".avanca",
    next: ".volta"
  },
  scrollLock:true,
  responsive:[{
    breakpoint: 600,
    settings:{
      slidesToShow: 2,
      slidesToScroll:2
    },
    breakpoint: 900,
    settings:{
      slidesToShow: 3,
      slidesToScroll:3
    },
  }]
})

// https://desenvolvimentoparaweb.com/javascript/gliderjs-slider-carousel/