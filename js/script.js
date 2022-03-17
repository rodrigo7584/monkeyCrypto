const btnMenuMobile = document.querySelector('.navbar-toggler')
const iconeMobile = document.querySelector('.icone-menu-mobile')
btnMenuMobile.addEventListener('click', function () {
  iconeMobile.classList.toggle('ativo')
})

// const caroussel = document.querySelector('.caroucel');
// //É mobile first então vai mostrar 1 slide com a menor resolução
// new Glider(caroussel,{
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   draggable: true,
//   arrows:{
//     prev: ".avanca",
//     next: ".volta"
//   },
//   scrollLock:true,
//   responsive:[{
//     breakpoint: 600,
//     settings:{
//       slidesToShow: 2,
//       slidesToScroll:2
//     },
//     breakpoint: 900,
//     settings:{
//       slidesToShow: 3,
//       slidesToScroll:3
//     },
//   }]
// })
const carousselGameplay = document.querySelector('.conteudoCaroussel')
//É mobile first então vai mostrar 1 slide com a menor resolução
new Glider(carousselGameplay, {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  arrows: {
    prev: '.caroussel-gameplay .btn-voltar',
    next: '.caroussel-gameplay .btn-avancar'
  },
  scrollLock: true,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      },
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
})
const carousselCharacters = document.querySelector('section.characters .lista')
new Glider(carousselCharacters, {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  scrollLock: true,
  arrows: {
    prev: '.caroussel-characters .btn-voltar',
    next: '.caroussel-characters .btn-avancar'
  },
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4
      }
    }
  ]
})
const carousselTeam = document.querySelector('section.team .cartoes')
new Glider(carousselTeam, {
  slidesToShow: 4,
  slidesToScroll: 1,
  draggable: true,
  scrollLock: true,
  arrows: {
    prev: '.caroussel-team .btn-voltar',
    next: '.caroussel-team .btn-avancar'
  },
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4
      }
    }
  ]
})
// https://desenvolvimentoparaweb.com/javascript/gliderjs-slider-carousel/
