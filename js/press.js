document.documentElement.onload = function () {
  document.getElementById('loader').style.display = 'block'
}
window.onload = function () {
  document.getElementById('loader').style.display = 'none'
}
const btnMenuMobile = document.querySelector('.navbar-toggler')
const iconeMobile = document.querySelector('.icone-menu-mobile')
btnMenuMobile.addEventListener('click', function () {
  iconeMobile.classList.toggle('ativo')
})
const carousselYoutube = document.querySelector('section.press .youtubers')
new Glider(carousselYoutube, {
  slidesToShow: 1,
  slidesToScroll: 1,
  scrollLock: true,
  arrows: {
    prev: '.caroussel-youtube .btn-voltar',
    next: '.caroussel-youtube .btn-avancar'
  },
  dots: '.caroussel-youtube .dots',
  responsive: [
    {
      breakpoint: 620,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4
      }
    }
  ]
})
const carousselNews = document.querySelector('section.news .news')
new Glider(carousselNews, {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  scrollLock: true,
  arrows: {
    prev: '.caroussel-news .btn-voltar',
    next: '.caroussel-news .btn-avancar'
  },
  dots: '.caroussel-news .dots',
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
        slidesToShow: 3
      }
    }
  ]
})
const youtuberModal = new bootstrap.Modal(
  document.querySelector('#youtuberModal')
)
const boxYoutubers = document.querySelector('.caroussel-youtube .youtubers')
const boxModais = document.querySelector('.modais-youtubers')
const youtuber = [
  {
    thumb: 'thumb-1',
    nome: 'Papo Profissional',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/mTjd2pUy_6M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-2',
    nome: 'Mattos',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/AFPNKP96V0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-3',
    nome: 'PatoinTV',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/g9eOo2YC0Qo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-4',
    nome: 'CryptoBlack',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/4niG3RVcQgE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-5',
    nome: 'Primo Crypto',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/3f10UsYDNd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-6',
    nome: 'JonF Cripto',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/7gaFYf_yrLA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-7',
    nome: 'Vovô Cripto',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/pfQDJgYNs90" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-8',
    nome: 'Príncipe Cripto',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/zba_TGvK_D0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-9',
    nome: 'Alan NFT',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/-gOaTbQmBuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  },
  {
    thumb: 'thumb-10',
    nome: 'Lucky Man',
    video:
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/3NengZWMFjo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
  }
]
