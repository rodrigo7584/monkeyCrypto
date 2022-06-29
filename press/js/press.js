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
if (!!carousselYoutube) {
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
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4
        }
      }
    ]
  })
}
const carousselNews = document.querySelector('section.news .news')
if (!!carousselNews) {
  new Glider(carousselNews, {
    slidesToShow: 1,
    slidesToScroll: 1,
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
}
const carousselAssets = document.querySelector('.caroussel-assets .assets')
if (!!carousselAssets) {
  new Glider(carousselAssets, {
    slidesToShow: 1,
    slidesToScroll: 1,
    scrollLock: true,
    arrows: {
      prev: '.caroussel-assets .btn-voltar',
      next: '.caroussel-assets .btn-avancar'
    },
    dots: '.caroussel-assets .dots'
  })
}
const modaisYoutubers = document.querySelectorAll('.modal.youtuberModal')
const conj = []
modaisYoutubers.forEach(function (item, i) {
  conj[i] = new bootstrap.Modal(document.querySelector(`#${item.id}`))
})

// const teste = new bootstrap.Modal(document.querySelector(`#youtuber1`))
