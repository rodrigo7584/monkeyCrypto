document.documentElement.onload = function () {
  document.getElementById('loader').style.display = 'block'
}
window.onload = function () {
  document.getElementById('loader').style.display = 'none'
}
const carousselYoutube = document.querySelector('section.press .youtubers')
new Glider(carousselYoutube, {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
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
