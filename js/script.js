const btnMenuMobile = document.querySelector('.navbar-toggler')
const iconeMobile = document.querySelector('.icone-menu-mobile')
btnMenuMobile.addEventListener('click', function () {
  iconeMobile.classList.toggle('ativo')
})

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
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  scrollLock: true,
  arrows: {
    prev: '.caroussel-team .btn-voltar',
    next: '.caroussel-team .btn-avancar'
  },
  responsive: [
    {
      breakpoint:576,
      settings:{
        slidesToShow: 2
      }
    },
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
// const bgTopo = document.querySelector('section.topo video source')
// const bgCharacters = document.querySelector('section.characters video source')
// const bgGameplay = document.querySelector('section.gameplay.roadmap video source')
// const bgTeam = document.querySelector('section.team video source')
// const bgTokenomics = document.querySelector('section.tokenomics video source')
// const bgRodape = document.querySelector('section.rodape video source')
// const resolucao = window.innerWidth

// bgTopo.setAttribute('src','videos/topo.mp4')
// window.onload =  function fundos(){
//   if (resolucao >= 768 ){
//     bgTopo.innerHTML('<source src="videos/mobile/topo.mp4" type="video/mp4" />')
//   }else{
//     bgTopo.setAttribute('src','videos/mobile/topo.mp4')
//   }
// }

// https://desenvolvimentoparaweb.com/javascript/gliderjs-slider-carousel/

